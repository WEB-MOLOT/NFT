<?php

namespace App\Http\Controllers\Manage\Resources;

use App\Http\Controllers\Controller;
use App\Http\Requests\Manage\Resources\Listing\StoreRequest;
use App\Http\Requests\Manage\Resources\Listing\UpdateRequest;
use App\Models\Listing;
use App\Support\DataTable\BuilderFailureException;
use App\Support\DataTable\Filter;
use App\Support\JsonResponse;
use Illuminate\Contracts\View\View;

/**
 * Class ListingController
 * @package App\Http\Controllers\Manage\Resources
 */
class ListingController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        return view('manage.resources.listing.index', [
            'columns' => $this->getDataTableColumns()
        ]);
    }

    /**
     * @return View
     */
    public function create(): View
    {
        return view('manage.resources.listing.create');
    }

    /**
     * @param Listing $listing
     * @return View
     */
    public function edit(Listing $listing): View
    {
        return view('manage.resources.listing.edit', compact('listing'));
    }

    /**
     * @param Filter $filter
     * @return JsonResponse
     * @throws BuilderFailureException
     */
    public function data(Filter $filter): JsonResponse
    {
        $filter->request()->setOrderColumns(...$this->getDataTableColumns());
        $filter->setBuilder(Listing::class)->order();

        return $filter->toJsonResponse();
    }

    /**
     * @param StoreRequest $request
     * @return JsonResponse
     */
    public function store(StoreRequest $request): JsonResponse
    {
        $listing = Listing::create(
            $request->validated()
        );

        return JsonResponse::success('Listing successfully created.')->redirectToRoute('resources.listings.edit', $listing);
    }

    /**
     * @param UpdateRequest $request
     * @param Listing $listing
     * @return JsonResponse
     */
    public function update(UpdateRequest $request, Listing $listing): JsonResponse
    {
        $listing->update(
            $request->validated()
        );

        return JsonResponse::success('Listing successfully updated.');
    }

    /**
     * @param Listing $listing
     * @return JsonResponse
     */
    public function destroy(Listing $listing): JsonResponse
    {
        $listing->delete();

        return JsonResponse::success('Listing successfully deleted.')->redirectToRoute('resources.listings.index');
    }

    /**
     * @return string[]
     */
    protected function getDataTableColumns(): array
    {
        return [
            'name', 'amount', 'sort', 'created_at', 'updated_at'
        ];
    }
}
