<?php

namespace App\Http\Controllers\Visible\Json;

use App\Http\Controllers\Controller;
use App\Http\Requests\Visible\Json\SubmitMessageRequest;
use App\Models\Messages\Message;
use App\Support\JsonResponse;

/**
 * Class SubmitMessageController
 * @package App\Http\Controllers\Visible\Json
 */
class SubmitMessageController extends Controller
{
    public function __invoke(SubmitMessageRequest $request): JsonResponse
    {
        Message::create(
            $request->validated()
        );

        return JsonResponse::success('The message has been successfully sent. We will contact you shortly.');
    }
}
