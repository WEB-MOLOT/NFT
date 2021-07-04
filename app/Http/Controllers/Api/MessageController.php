<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Forms\MessageRequest;
use App\Models\Messages\Message;
use App\Support\JsonResponse;
use http\Env\Response;

/**
 * Class MessageController
 * @package App\Http\Controllers\Api\Forms
 */
class MessageController extends Controller
{
    public function __invoke(MessageRequest $request)
    {
        Message::create(
            $request->validated()
        );

        return response()->json([
            'message' => 'successfull'
        ]);
    }
}
