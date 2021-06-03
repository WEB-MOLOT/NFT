<?php

namespace App\Http\Controllers\Manage\Resources;

use App\Http\Controllers\Manage\ResourceController;
use App\Models\User;
use App\Support\DataTable\Filter;
use App\Support\JsonResponse;
use Illuminate\Contracts\View\View;

/**
 * Class UserController
 * @package App\Http\Controllers\Manage\Resources
 */
class UserController extends ResourceController
{
    /**
     * @return View
     */
    public function index(): View
    {
        return view('manage.resources.user.index');
    }

    /**
     * @return View
     */
    public function create(): View
    {
        return view('manage.resources.user.create');
    }

    /**
     * @param Filter $filter
     * @return JsonResponse
     */
    public function data(Filter $filter): JsonResponse
    {
        $filter->setBuilder(User::class);

        return $filter->toJsonResponse();
    }
}
