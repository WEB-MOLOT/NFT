<?php

namespace App\Http\Controllers\Manage\Resources;

use App\Http\Controllers\Manage\ResourceController;
use App\Models\Project;
use App\Support\DataTable\BuilderFailureException;
use App\Support\DataTable\Filter;
use App\Support\JsonResponse;
use Illuminate\Contracts\View\View;

/**
 * Class ProjectController
 * @package App\Http\Controllers\Manage\Resources
 */
class ProjectController extends ResourceController
{
    /**
     * @return View
     */
    public function index(): View
    {
        return view('manage.resources.project.index', [
            'columns' => $this->getDataTableColumns()
        ]);
    }

    /**
     * @param Filter $filter
     * @return JsonResponse
     * @throws BuilderFailureException
     */
    public function data(Filter $filter): JsonResponse
    {
        $filter->request()->setOrderColumns('name', 'rating', 'created_at', 'updated_at');
        $filter->setBuilder(Project::class)->order();
        $filter->builder()->with('details', 'user');

        return $filter->toJsonResponse();
    }

    /**
     * @return array
     */
    protected function getDataTableColumns(): array
    {
        return [
            'name', 'status', 'rating', 'price', 'user_id', 'created_at', 'updated_at'
        ];
    }
}