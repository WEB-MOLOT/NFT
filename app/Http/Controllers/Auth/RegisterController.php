<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{

    public function register(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed'
        ]);

        $user =  User::create([
            'email' => $request->email,
            'telegram_id' => $request->telegram_id,
            'twitter_id'  => $request->twitter_id,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user);


        return response()->json([
            'user' => $user,
        ]);
    }
}
