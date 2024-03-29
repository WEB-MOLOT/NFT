<?php

namespace App\Http\Controllers\Auth\Social;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

/**
 * Class GoogleController
 * @package App\Http\Controllers\Auth\Social
 */
class TwitterController extends Controller
{
    public function redirect() {
        return Socialite::driver('twitter')->redirect();
    }

    public function login() {
        try {
            $user = Socialite::driver('twitter')->stateless()->user();
            $isUser = User::where('twitter_id', $user->id)->first();

            if ($isUser) {
                Auth::login($isUser);

                return redirect('/');
            } else {
                $createUser = User::create([
                    'name' => $user->name,
                    'email' => $user->getEmail(),
                    'google_id' => $user->getId(),
                    'password' => bcrypt('user')
                ]);

                Auth::login($createUser);

                return redirect('/');
            }
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }
}
