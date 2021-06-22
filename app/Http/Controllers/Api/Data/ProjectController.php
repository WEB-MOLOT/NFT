<?php

namespace App\Http\Controllers\Api\Data;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Data\IndexProjectRequest;
use App\Http\Requests\Api\Data\Project\StoreRequest;
use App\Models\Project;
use App\Services\ProjectService;
use Illuminate\Http\JsonResponse;
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

    /**
     * @param IndexProjectRequest $request
     * @return JsonResponse
     */
    public function index(IndexProjectRequest $request): JsonResponse
    {
        return new JsonResponse(
            $this->projectService->getProjects($request->validated())
        );
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
