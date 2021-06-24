<?php

namespace App\Models;

use App\Traits\Model\FormattedJsonDates;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Listing
 * @package App\Models
 * @property int $id
 * @property string $name
 * @property int $sort
 * @property int $amount
 * @property string $content
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class Listing extends Model
{
    use FormattedJsonDates;

    protected $fillable = [
        'name', 'sort', 'amount', 'content'
    ];
}
