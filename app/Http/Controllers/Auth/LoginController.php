<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Tymon\JWTAuth\Exceptions\{
    JWTException
};
use Tymon\JWTAuth\JWTAuth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    protected $auth;

    public function __construct(JWTAuth $auth)
    {
        $this->middleware('guest')->except('logout');
        $this->auth = $auth;
    }



    public function login() {
        request()->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        try {
            if (!$token = $this->auth->attempt(request()->only('email', 'password'))) {
                return response()->json(['other' => 'Email или пароль введены неправильно.'], 401);
            }
        } catch (JWTException $e) {
            return response()->json(['other' => 'Email или пароль введены неправильно.'], $e->getStatusCode());
        }

        $user = request()->user();

        return response()->json([
            'data' => $user,
            'meta' => [
                'token' => $token
            ]
        ], 200);
    }

    public function me()
    {
        $user = request()->user();
        $roles = [];

        foreach ($user->roles as $r) {
            array_push($roles, $r->slug);
        }

        return response()->json([
            'data' => [
                'user' => $user,
                'role' => $roles
            ]
        ], 200);
    }

    public function logout()
    {
        $this->auth->invalidate($this->auth->getToken());

        return response(['success' => 'logged out'], 200);
    }

    public function username()
    {
        return 'email';
    }
}