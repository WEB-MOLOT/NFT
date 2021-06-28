<?php

namespace App\Http\Controllers\Api\Data;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Data\IndexProjectRequest;
use App\Http\Requests\Api\Data\Project\StoreRequest;
use App\Http\Resources\ProjectResource;
use App\Models\Project;
use App\Services\FilterService;
use App\Services\ProjectService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
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

//        if($data['categories'] ?? false) {
//            $builder->whereHas('categories', static fn(Builder $builder) => $builder->whereIn('id', $data['categories']));
//        }

        if($request->verified == "true") {
            $builder->where('is_verified', 1);
        }

        switch($request->sort_by) {
            case FilterService::ORDER_TIME:
                $builder->orderBy('started_at');
                break;
            case FilterService::ORDER_PRICE:
                $builder->orderBy('price');
                break;
            case FilterService::ORDER_RATING:
//                $builder->orderBy('rating', $data['order_by_dir']);
                break;
        }

        $builder->limit($request->limit);

        return ProjectResource::collection($builder->get());
//        return new JsonResponse(
//            $this->projectService->getProjects($request->all())
//        );
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
}
