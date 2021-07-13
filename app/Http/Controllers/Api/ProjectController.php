<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Data\Project\StoreRequest;
use App\Http\Requests\Api\Data\Project\UpdateRequest;
use App\Http\Resources\ProjectResource;
use App\Models\Project;
use App\Models\Social;
use App\Services\ProjectService;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Throwable;

/**
 * Class ProjectController
 * @package App\Http\Controllers\Api\Data
 */
class ProjectController extends Controller
{
    /**
     * ProjectController constructor.
     * @param ProjectService $projectService
     */
    protected $projectService;
    public function __construct(ProjectService $projectService) {
        $this->projectService = $projectService;
    }

    public function index(Request $request)
    {
        $builder = Project::isPublished();

        $statuses = [];

        if($request->categories && count($request->categories) > 0) {
            $builder->whereHas('categories', static fn(Builder $builder) => $builder->whereIn('id', $request->categories));
        }

        if($request->verified == "true") {
            $builder->where('is_verified', 1);
        }

        $builder->where('min_price', '>=', intval($request->min_price))->where('max_price', '<=', intval($request->max_price));

        if ($request->sort_order !== 'undefined' && $request->sort_by !== 'undefined') {
            switch($request->sort_order) {
                case 'Price':
                    if ($request->sort_by == "desc") {
                        $builder->orderBy('min_price');
                        break;
                    }

                    if ($request->sort_by == "asc") {
                        $builder->orderBy('max_price', 'desc');
                        break;
                    }

                    break;

                case 'Rating':
                    $builder->orderBy('rating', $request->sort_by);
                    break;
                case 'By Time':
                    $builder->orderBy('started_at', $request->sort_by);
                    break;
                case 'Will begin':
                    $builder->orderBy('started_at', $request->sort_by);
                    break;
                case 'Started':
                    $builder->orderBy('started_at', $request->sort_by);
                    break;
            }
        }


        if($request->active == "true") {
            $statuses[] = Project::STATUS_ACTIVE;
        }

        if ($request->upcoming == "true") {
            $statuses[] = Project::STATUS_UPCOMING;
        }

        $showMore = $builder->count() > $request->limit ? true : false;

        if (count($statuses) == 2) {

            $active = clone $builder;
            $upcoming = clone $builder;

            return response()->json([
                'active' => ProjectResource::collection($active->where('status', 2)->limit($request->limit / 2)->get()),
                'upcoming' => ProjectResource::collection($upcoming->where('status', 1)->limit($request->limit / 2)->get()),
                'showMore' => $showMore
            ]);
        } else {

            $builder->whereIn('status', $statuses);

            $builder->limit($request->limit);

            return response()->json([
                'projects' => ProjectResource::collection($builder->get()),
                'showMore' => $showMore
            ]);
        }
    }

    /**
     * @param Project $project
     * @return JsonResponse
     */
    public function show(Project $project): JsonResponse
    {
        if(!$project->is_published) {
            throw new NotFoundHttpException;
        }

        $this->projectService->loadProjectDependencies($project);

        return new JsonResponse($project);
    }

    /**
     * @param StoreRequest $request
     * @return JsonResponse
     * @throws Throwable
     */
    public function store(StoreRequest $request)
    {
        $params = $request->all();
        $startDateArray = explode(',', $request->start_date);
        $endDateArray = explode(',', $request->end_date);


        $params['started_at'] = Carbon::parse($startDateArray[0] . $startDateArray[1])->setTimezone(trim($startDateArray[2]));
        $params['ended_at'] = Carbon::parse($endDateArray[0] . $endDateArray[1])->setTimezone(trim($endDateArray[2]));
        $params['started_at_timezone'] = trim($startDateArray[2]);
        $params['ended_at_timezone'] = trim($endDateArray[2]);
        $params['user_id'] = $user->id ?? null;


        $project = Project::create($params);

        $project->categories()->sync(json_decode($request->categories));

        foreach (json_decode($request->socials) as $item) {
            $social = new Social();

            $social->name = $item->name;
            $social->data = $item->data;

            $social->save();

            $project->socials()->attach($social);
        }


        $project->addMedia($request->logo)->toMediaCollection('project_logo');

        if ($request->images) {
            foreach ($request->images as $image) {
                $project->addMedia($image)->toMediaCollection('project_images');
            }
        }

        return response()->json([
            'message' => 'Successfully saved',
            'project' => $project
        ], 200);
    }

    /**
     * @param StoreRequest $request
     * @param Project $project
     * @return JsonResponse
     */
    public function update(Project $project, UpdateRequest $request)
    {
        $params = $request->all();


        $startDateArray = explode(',', $request->start_date);
        $endDateArray = explode(',', $request->end_date);

        $params['started_at'] = Carbon::parse($startDateArray[0] . $startDateArray[1])->setTimezone(trim($startDateArray[2]));
        $params['ended_at'] = Carbon::parse($endDateArray[0] . $endDateArray[1])->setTimezone(trim($endDateArray[2]));
        $params['started_at_timezone'] = trim($startDateArray[2]);
        $params['ended_at_timezone'] = trim($endDateArray[2]);
        $params['user_id'] = 1;
        $params['rating'] = 1.0;


        $project->update($params);

        $project->categories()->sync(json_decode($request->categories));

        $socialIds = [];

        foreach (json_decode($request->socials) as $item) {
            $social = Social::updateOrCreate(
                ['name' => $item->name, 'data' => $item->data],
                ['name' => $item->name, 'data' => $item->data]
            );

            $socialIds[] = $social->id;
        }

        foreach ($project->socials()->allRelatedIds()->toArray() as $id) {
            if (!in_array($id, $socialIds)) Social::find($id)->delete();
        }

        $project->socials()->sync($socialIds);

        if($request->new_logo) {
            $project->clearMediaCollection('project_logo');
            $project->addMedia($request->logo)->toMediaCollection('project_logo');
        }

        if ($request->new_images) {
            $project->clearMediaCollection('project_images');

            foreach ($request->new_images as $image) {
                $project->addMedia($image)->toMediaCollection('project_images');
            }
        }


        return response()->json([
            'message' => 'Successfully saved',
            'project' => $project
        ], 200);
    }

    public function destroy($id) {
        $project = Project::findOrFail($id);

        $project->delete();

        return response()->json([
            'message' => 'successfully deleted'
        ], 200);
    }

    public function publish($id): JsonResponse
    {
        try {
            $project = Project::findOrFail($id);

            $project->is_published = true;
            $project->save();

            return response()->json([
                'message' => 'successfully published',
                '$project' => $project
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'message' => $e->getMessage()
            ], 400);
        }

    }

    public function verify($id) {
        $project = Project::findOrFail($id);

        $project->is_verified = 1;

        $project->save();

        return response()->json([
            'message' => 'successfully verified'
        ], 200);
    }

    public function restore($id) {
        $project = Project::onlyTrashed()->where('id', $id)->first();

        $project->restore();

        return response()->json([
            'message' => 'successfully restored'
        ], 200);
    }

    public function forceDelete($id) {
        $project = Project::onlyTrashed()->where('id', $id)->first();

        $project->clearMediaCollection('project_logo');
        $project->clearMediaCollection('project_images');

        $project->forceDelete();

        return response()->json([
            'message' => 'successfully deleted'
        ], 200);
    }

    public function follow($id, Request $request) {
        $project = Project::findOrFail($id);

        $project->subscribers()->attach($request->user_id);

        return response()->json('subscribed');
    }

    public function unfollow($id, Request $request) {
        $project = Project::findOrFail($id);

        $project->subscribers()->detach($request->user_id);

        return response()->json([
            'message' => 'successfully unsubscribed'
        ], 200);
    }

    public function getUnpublishedProjects(): \Illuminate\Http\Resources\Json\AnonymousResourceCollection
    {
        $projects = Project::where('is_published', 0)->get();

        return ProjectResource::collection($projects);
    }

    public function getPublishedProjects() {
        $projects = Project::isPublished()->get();

        return ProjectResource::collection($projects);
    }

    public function getTrashedProjects() {
        $projects = Project::onlyTrashed()->get();

        return ProjectResource::collection($projects);
    }
}
