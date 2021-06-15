<?php

namespace App\Http\Controllers\Manage\Resources;

use App\Http\Controllers\Manage\ResourceController;
use App\Http\Requests\Manage\Resources\Page\StoreRequest;
use App\Http\Requests\Manage\Resources\Page\UpdateRequest;
use App\Models\Page;
use App\Support\DataTable\Filter;
use App\Support\JsonResponse;
use App\Support\PageTemplates\Builder;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Throwable;

/**
 * Class PageController
 * @package App\Http\Controllers\Manage\Resources
 */
class PageController extends ResourceController
{
    /**
     * @return View
     */
    public function index(): View
    {
        return view('manage.resources.page.index', [
            'columns' => $this->getDataTableColumns()
        ]);
    }

    /**
     * @param Builder $builder
     * @return View
     */
    public function create(Builder $builder): View
    {
        return view('manage.resources.page.create', [
            'templates' => $builder->templates()
        ]);
    }

    /**
     * @param Page $page
     * @return View
     */
    public function edit(Page $page): View
    {
        return view('manage.resources.page.edit', [
            'page' => $page,
            'template' => $page->getTemplate()
        ]);
    }

    /**
     * @param Page $page
     * @return RedirectResponse
     */
    public function show(Page $page): RedirectResponse
    {
        abort_if(!$page->is_active, 404);

        return new RedirectResponse($page->getSlug());
    }

    /**
     * @param Filter $filter
     * @return JsonResponse
     */
    public function data(Filter $filter): JsonResponse
    {
        $filter->request()->setOrderColumns(...$this->getDataTableColumns());
        $filter->setBuilder(Page::class);

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

        $page = DB::transaction(static function() use ($attributes) {
            $attributes['is_index'] && Page::where('is_index', 1)->limit(1)->update(['is_index' => 0]);
            $page = Page::create($attributes);
            $page->meta()->create($attributes['meta']);

            return $page;
        });

        return JsonResponse::success('Page successfully created.')->redirectToRoute('resources.pages.edit', $page);
    }

    /**
     * @param UpdateRequest $request
     * @param Page $page
     * @return JsonResponse
     * @throws Throwable
     * @throws ValidationException
     */
    public function update(UpdateRequest $request, Page $page): JsonResponse
    {
        $attributes = $request->validated();
        $attributes['data'] = Validator::validate($attributes['data'] ?? [], $page->getTemplate()->getValidationRules());

        DB::transaction(static function() use ($attributes, $page) {
            !$page->is_index && $attributes['is_index'] && Page::where('is_index', 1)->limit(1)->update(['is_index' => 0]);
            $page->update($attributes);
            $page->meta()->update($attributes['meta']);
        });

        return JsonResponse::success('Page successfully updated.');
    }

    /**
     * @param Page $page
     * @return JsonResponse
     */
    public function destroy(Page $page): JsonResponse
    {
        $page->delete();

        return JsonResponse::success('Page successfully deleted.')->redirectToRoute('resources.pages.index');
    }

    /**
     * @return string[]
     */
    protected function getDataTableColumns(): array
    {
        return [
            'name', 'is_active', 'created_at', 'updated_at'
        ];
    }
}
