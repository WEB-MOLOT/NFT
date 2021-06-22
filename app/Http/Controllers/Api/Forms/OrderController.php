<?php

namespace App\Http\Controllers\Api\Forms;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Forms\OrderRequest;
use App\Models\Messages\Order;
use App\Support\JsonResponse;

/**
 * Class SubmitOrderController
 * @package App\Http\Controllers\Visible\Json
 */
class OrderController extends Controller
{
    /**
     * SubmitOrderController constructor.
     */
    public function __construct()
    {
        //$this->middleware('google_recaptcha');
    }

    /**
     * @param OrderRequest $request
     * @return JsonResponse
     */
    public function __invoke(OrderRequest $request): JsonResponse
    {
        Order::create(
            $request->validated()
        );

        return JsonResponse::success();
    }
}
