<?php

namespace App\Http\Controllers\Api\Forms;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Forms\MessageRequest;
use App\Models\Messages\Message;
use App\Support\JsonResponse;

/**
 * Class MessageController
 * @package App\Http\Controllers\Api\Forms
 */
class MessageController extends Controller
{
    public function __invoke(MessageRequest $request): JsonResponse
    {
        Message::create(
            $request->validated()
        );

        return JsonResponse::success();
    }
}
