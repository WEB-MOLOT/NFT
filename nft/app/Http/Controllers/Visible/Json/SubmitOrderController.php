<?php

namespace App\Http\Controllers\Visible\Json;

use App\Http\Controllers\Controller;
use App\Http\Requests\Visible\Json\SubmitOrderRequest;
use App\Models\Messages\Order;
use App\Support\JsonResponse;

/**
 * Class SubmitOrderController
 * @package App\Http\Controllers\Visible\Json
 */
class SubmitOrderController extends Controller
{
    /**
     * SubmitOrderController constructor.
     */
    public function __construct()
    {
        $this->middleware('google_recaptcha');
    }

    /**
     * @param SubmitOrderRequest $request
     * @return JsonResponse
     */
    public function __invoke(SubmitOrderRequest $request): JsonResponse
    {
        Order::create(
            $request->validated()
        );

        return JsonResponse::success('The message has been successfully sent. We will contact you shortly.');
    }
}
