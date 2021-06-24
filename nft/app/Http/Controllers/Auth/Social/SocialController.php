<?php

namespace App\Http\Controllers\Auth\Social;

use App\Models\User;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Laravel\Socialite\Contracts\Provider;
use Laravel\Socialite\Contracts\User as SocialiteUser;
use Laravel\Socialite\SocialiteManager;
use Symfony\Component\HttpFoundation\RedirectResponse;

/**
 * Class SocialController
 * @package App\Http\Controllers\Auth\Social
 */
abstract class SocialController extends Controller
{
    protected Provider $provider;

    /**
     * GoogleController constructor.
     * @param SocialiteManager $manager
     */
    public function __construct(SocialiteManager $manager)
    {
        $this->provider = $manager->driver($this->getProviderName());
    }

    /**
     * @return RedirectResponse
     */
    public function handle(): RedirectResponse
    {
        $user = $this->provider->user();
        $localUser = $this->getUserIfExists($user) ?? $this->createUser($user);

        Auth::login($localUser, $this->rememberUser());

        return redirect()->route('visible.pages.index');
    }

    /**
     * @return RedirectResponse
     */
    public function redirect(): RedirectResponse
    {
        return $this->provider->redirect();
    }

    /**
     * @param SocialiteUser $user
     * @return User|null
     */
    public function getUserIfExists(SocialiteUser $user): ?User
    {
        return User::where($this->getProviderName().'_id', $user->getId())->first();
    }

    /**
     * @param SocialiteUser $user
     * @return User
     */
    protected function createUser(SocialiteUser $user): User
    {
        return User::create([
            'name' => Str::limit($user->getName(), 100, ''),
            $this->getProviderName().'_id' => $user->getId(),
            'password' => Hash::make(Str::random())
        ]);
    }

    /**
     * @return string
     */
    abstract protected function getProviderName(): string;

    /**
     * @return bool
     */
    protected function rememberUser(): bool
    {
        return true;
    }
}
