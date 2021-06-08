<?php

namespace App\Http\Controllers\Visible\Json;

use App\Exceptions\ServiceException;
use App\Http\Controllers\Controller;
use App\Http\Requests\Visible\Json\SubmitProjectRequest;
use App\Services\ProjectService;
use App\Support\JsonResponse;

/**
 * Class SubmitProjectController
 * @package App\Http\Controllers\Visible\Json
 */
class SubmitProjectController extends Controller
{
    /**
     * SubmitProjectController constructor.
     */
    public function __construct()
    {
        $this->middleware('google_recaptcha');
    }

    /**
     * @param SubmitProjectRequest $request
     * @param ProjectService $service
     * @return JsonResponse
     */
    public function __invoke(SubmitProjectRequest $request, ProjectService $service): JsonResponse
    {
        try {
            $service->create(
                $request->validated(), $request->user()
            );
        }
        catch(ServiceException $exception) {
            return JsonResponse::error($exception->getMessage(), $exception->getErrors());
        }

        return JsonResponse::success();
    }
}
