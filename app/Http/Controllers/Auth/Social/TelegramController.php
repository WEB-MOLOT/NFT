<?php

namespace App\Http\Controllers\Auth\Social;

use App\Models\User;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

/**
 * Class TelegramController
 * @package App\Http\Controllers\Auth\Social
 */
class TelegramController extends Controller
{
    public function redirect() {
        return Socialite::driver('telegram')->redirect();
    }

    public function login() {
        try {
            $user = Socialite::driver('telegram')->stateless()->user();
            $isUser = User::where('telegram_id', $user->id)->first();

            if ($isUser) {
                Auth::login($isUser);

                return redirect('/');
            } else {
                $createUser = User::create([
                    'name' => $user->name,
                    'email' => $user->getEmail(),
                    'telegram_id' => $user->getId(),
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
