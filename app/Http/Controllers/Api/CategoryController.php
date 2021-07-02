<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;

/**
 * Class CategoryController
 * @package App\Http\Controllers\Api\Data
 */
class CategoryController extends Controller
{
    /**
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        return new JsonResponse(
            $this->categories()
        );
    }

    protected function categories(): Collection
    {
        return Cache::remember(
            'categories', Carbon::now()->addMonth(),
            static fn(): Collection => Category::orderBy('name')->get()
        );
    }
}
