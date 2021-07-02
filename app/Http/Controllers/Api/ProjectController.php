<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Data\Project\StoreRequest;
use App\Http\Resources\ProjectResource;
use App\Models\Project;
use App\Services\ProjectService;
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
    public function __construct(
        protected ProjectService $projectService
    ) {}

    public function index(Request $request)
    {
        $builder = Project::isPublished();

        $statuses = [];

        if($request->active == "true") {
            $statuses[] = Project::STATUS_ACTIVE;
        }

        if ($request->upcoming == "true") {
            $statuses[] = Project::STATUS_UPCOMING;
        }

        $builder->whereIn('status', $statuses);

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
                    $builder->orderBy('min_price', $request->sort_by);
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

        $builder->limit($request->limit);

        return ProjectResource::collection($builder->get());
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
    public function store(StoreRequest $request): JsonResponse
    {
        return new JsonResponse(
            $this->projectService->create($request->validated(), $request->user())
        );
    }

    /**
     * @param Project $project
     * @return JsonResponse
     */
    public function update(Project $project): JsonResponse
    {
        return new JsonResponse(
            $this->projectService->update($project, [])
        );
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

    public function getUnpublishedProjects(): \Illuminate\Http\Resources\Json\AnonymousResourceCollection
    {
        $projects = Project::where('is_published', 0)->get();

        return ProjectResource::collection($projects);
    }
}
