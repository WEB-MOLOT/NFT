<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;
use Tymon\JWTAuth\Contracts\JWTSubject;
/**
 * Class User
 * @package App\Models
 * @property int $id
 * @property string $name
 * @property int $group
 * @property string $email
 * @property int $telegram_id
 * @property int $google_id
 * @property int $twitter_id
 * @property string $password
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class User extends Authenticatable implements JWTSubject
{
    use Notifiable;

    public const GROUP_ADMIN = 1;
    public const GROUP_MODERATOR = 2;
    public const GROUP_USER = 9;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'group', 'email', 'telegram_id', 'google_id', 'twitter_id', 'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $attributes = [
        'group' => self::GROUP_USER
    ];

    /**
     * @return string
     */
    public function getLittleName(): string
    {
        return (string) Str::of($this->name)->limit(20)->title();
    }

    public function projects() {
        return $this->hasMany(Project::class);
    }

    public function followedProjects() {
        return $this->belongsToMany(Project::class, 'project_user_subscriptions');
    }

    /**
     * @return int[]
     */
    public static function groups(): array
    {
        return [
            self::GROUP_USER, self::GROUP_MODERATOR, self::GROUP_ADMIN
        ];
    }

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }
}
