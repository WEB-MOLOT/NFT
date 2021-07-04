<?php

namespace App\Models\Messages;

use App\Traits\Model\IpTwoConvert;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Message
 * @package App\Models\Messages
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $telegram
 * @property int $subject
 * @property string $message
 * @property int $user_id
 * @property string $ip
 * @property Carbon $executed_at
 * @property Carbon $created_at
 */
class Message extends Model
{
    use IpTwoConvert;

    public $timestamps = false;

    protected $fillable = [
        'name', 'email', 'telegram', 'subject', 'message', 'user_id', 'ip', 'executed_at', 'created_at'
    ];

    /**
     * @return void
     */
    protected static function boot(): void
    {
        static::creating(static fn(Message $message): Message => $message->setAttribute('created_at', Carbon::now()));
        parent::boot();
    }
}
