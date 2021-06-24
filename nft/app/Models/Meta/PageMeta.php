<?php

namespace App\Models\Meta;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PageMeta
 * @package App\Models\Meta
 * @property int $id
 * @property int $page_id
 * @property string $title
 * @property string $description
 */
class PageMeta extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'page_id', 'title', 'description'
    ];
}
