<?php

namespace App\Http\Controllers\Manage\Resources;

use App\Http\Controllers\Manage\ResourceController;
use App\Http\Requests\Manage\Resources\Category\StoreRequest;
use App\Http\Requests\Manage\Resources\Category\UpdateRequest;
use App\Models\Category;
use App\Support\DataTable\BuilderFailureException;
use App\Support\DataTable\Filter;
use App\Support\JsonResponse;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Throwable;

/**
 * Class CategoryController
 * @package App\Http\Controllers\Manage\Resources
 */
class CategoryController extends ResourceController
{
    /**
     * @return View
     */
    public function index(): View
    {
        return view('manage.resources.category.index', [
            'columns' => $this->getDataTableColumns()
        ]);
    }

    /**
     * @return View
     */
    public function create(): View
    {
        return view('manage.resources.category.create');
    }

    /**
     * @param Category $category
     * @return View
     */
    public function edit(Category $category): View
    {
        return view('manage.resources.category.edit', compact('category'));
    }

    /**
     * @param Filter $filter
     * @return JsonResponse
     * @throws BuilderFailureException
     */
    public function data(Filter $filter): JsonResponse
    {
        $filter->request()->setOrderColumns(...$this->getDataTableColumns());
        $filter->setBuilder(Category::class)->order();

        return $filter->toJsonResponse();
    }

    /**
     * @param StoreRequest $request
     * @return JsonResponse
     * @throws Throwable
     */
    public function store(StoreRequest $request): JsonResponse
    {
        $attributes = $request->validated();
        $attributes['image'] = $request->file('image')->store('public/category');

        $category = DB::transaction(static function() use ($attributes) {
            $category = Category::create($attributes);
            $category->meta()->create($attributes['meta']);

            return $category;
        });

        return JsonResponse::success('Category successfully created.')->redirectToRoute('resources.categories.edit', $category);
    }

    /**
     * @param UpdateRequest $request
     * @param Category $category
     * @return JsonResponse
     * @throws Throwable
     */
    public function update(UpdateRequest $request, Category $category): JsonResponse
    {
        $attributes = $request->validated();

        if($request->hasFile('image')) {
            $attributes['image'] = $request->file('image')->store('public/category');
            Storage::delete($category->image);
        }

        DB::transaction(static function() use ($attributes, $category) {
            $category->update($attributes);
            $category->meta()->update($attributes['meta']);
        });

        return JsonResponse::success('Category successfully updated.');
    }

    /**
     * @param Category $category
     * @return JsonResponse
     */
    public function destroy(Category $category): JsonResponse
    {
        Storage::delete($category->image);
        $category->delete();

        return JsonResponse::success('Category successfully deleted.')->redirectToRoute('resources.categories.index');
    }

    /**
     * @return array
     */
    protected function getDataTableColumns(): array
    {
        return [
            'name', 'created_at', 'updated_at'
        ];
    }
}
