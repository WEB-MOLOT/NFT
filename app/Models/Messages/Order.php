<?php

namespace App\Models\Messages;

use App\Models\User;
use App\Traits\Model\IpTwoConvert;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class Order
 * @package App\Models\Messages
 * @property int $id
 * @property string $name
 * @property string $email
 * @property int $listing_id
 * @property string $message
 * @property int $user_id
 * @property string $ip
 * @property Carbon $executed_at
 * @property Carbon $updated_at
 */
class Order extends Model
{
    use IpTwoConvert;

    public $timestamps = false;

    protected $fillable = [
        'name', 'email', 'listing_id', 'message', 'user_id', 'ip', 'executed_at', 'created_at'
    ];

    protected $casts = [
        'executed_at' => 'datetime',
        'created_at' => 'datetime'
    ];

    /**
     * @return void
     */
    protected static function boot(): void
    {
        static::creating(static fn(Order $order): Order => $order->setAttribute('created_at', Carbon::now()));
        parent::boot();
    }

    /**
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
