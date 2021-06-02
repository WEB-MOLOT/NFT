<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Option
 * @package App\Models
 * @property int $id
 * @property string $key
 * @property string $value
 */
class Option extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'key', 'value'
    ];
}
