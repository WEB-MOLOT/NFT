<?php

namespace App\Http\Controllers\Manage;

use App\Http\Controllers\Controller;
use App\Http\Requests\Manage\UpdateOptionRequest;
use App\Models\Option;
use App\Support\JsonResponse;
use App\Support\Navigation\Navigation;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Throwable;

/**
 * Class OptionController
 * @package App\Http\Controllers\Manage
 */
class OptionController extends Controller
{
    /**
     * @param Navigation $navigation
     * @return View
     */
    public function index(Navigation $navigation): View
    {
        $navigation->createCrumb('Settings');

        return view('manage.option');
    }

    /**
     * @param UpdateOptionRequest $request
     * @return JsonResponse
     * @throws Throwable
     */
    public function update(UpdateOptionRequest $request): JsonResponse
    {
        $attributes = Arr::dot($request->validated());
        $attributes = array_filter($attributes, static fn($value) => $value !== null);

        DB::transaction(static function() use ($attributes) {
            Option::whereNotIn('key', array_keys($attributes))->delete();

            foreach($attributes as $key => $value) {
                Option::updateOrCreate(compact('key'), compact('value'));
            }
        });

        Cache::forget('options');

        return JsonResponse::success('Settings successfully updated.');
    }
}
