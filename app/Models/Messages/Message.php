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

    public const SUBJECT_ICO = 1;
    public const SUBJECT_AIRDROP = 2;
    public const SUBJECT_FEEDBACK = 3;
    public const SUBJECT_AD = 4;
    public const SUBJECT_BUSINESS = 5;
    public const SUBJECT_REPORT = 6;
    public const SUBJECT_OTHER = 7;

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

    /**
     * @return int[]
     */
    public static function subjects(): array
    {
        return [
            self::SUBJECT_ICO, self::SUBJECT_AIRDROP, self::SUBJECT_FEEDBACK, self::SUBJECT_AD, self::SUBJECT_BUSINESS, self::SUBJECT_REPORT, self::SUBJECT_OTHER
        ];
    }
}
