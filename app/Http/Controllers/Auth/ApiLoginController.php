<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\JWTAuth;

class ApiLoginController extends Controller
{
    use AuthenticatesUsers;
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */

    protected $auth;

    public function __construct(JWTAuth $auth)
    {
        $this->middleware('auth:api', ['except' => ['login']]);

        $this->auth = $auth;
    }

    /**
     * Get a JWT via given credentials.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function login()
    {
        request()->validate([
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);

        try {
            if (!$token = $this->auth->attempt(request()->only('email', 'password'))) {
                return response()->json(['other' => 'Логин или пароль введены неправильно.'], 401);
            }
        } catch (JWTException $e) {
            return response()->json(['other' => 'Логин или пароль введены неправильно.'], $e->getStatusCode());
        }

        $user = request()->user();

        return response()->json([
            'data' => $user,
            'meta' => [
                'token' => $token
            ]
        ], 200);
    }

    /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function me()
    {
        return response()->json(auth()->user());
    }

    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout()
    {
        auth()->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }

    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh()
    {
        return $this->respondWithToken(auth()->refresh());
    }

    /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60
        ]);
    }
}
