<?php

namespace App\Http\Middleware;

use App\Support\JsonResponse;
use Closure;
use Illuminate\Http\Client\RequestException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class GoogleRecaptchaVerification
 * @package App\Http\Middleware
 */
class GoogleRecaptchaVerification
{
    protected string $endPoint = 'https://www.google.com/recaptcha/api/siteverify';

    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @return mixed
     * @throws RequestException
     */
    public function handle(Request $request, Closure $next): Response
    {
        return !$request->user() && !$this->isValidRequest($request) ? $this->badResponse($request) : $next($request);
    }

    /**
     * @param Request $request
     * @return Response
     */
    protected function badResponse(Request $request): Response
    {
        return $request->isJson() ? JsonResponse::error('Dont valid request: recaptcha not verified', status:Response::HTTP_FORBIDDEN) : new Response(status: Response::HTTP_FORBIDDEN);
    }

    /**
     * @param Request $request
     * @return bool
     * @throws RequestException
     */
    protected function isValidRequest(Request $request): bool
    {
        if(!$request->filled('recaptcha_token')) {
            return false;
        }

        $data = [
            'secret' => '6Lc2WxwbAAAAADACUSyUMfBaGca6XCeWwWsYs2k6', // TODO change on config variable
            'response' => $request->input('recaptcha_token'),
            'remoteip' => $request->ip()
        ];

        return Http::asForm()->post($this->endPoint, $data)->throw()->json('success', false);
    }
}
