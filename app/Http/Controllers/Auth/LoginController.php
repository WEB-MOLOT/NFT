<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Http\Request;


class LoginController extends Controller {
    public function __invoke(Request $request) {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);

        if ( !auth()->attempt($request->only('email', 'password')) ) {
            throw new AuthenticationException();
        }
    }

    public function logout(Request $request) {
        auth()->logout();

        return response()->json('success');
    }
}
