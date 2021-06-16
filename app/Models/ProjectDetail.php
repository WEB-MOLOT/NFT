<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ProjectDetail
 * @package App\Models
 * @property int $id
 * @protected int $project_id
 * @property string $email
 * @property string $discord
 * @property string $medium
 * @property string $instagram
 * @property string $facebook
 * @property string $twitter
 * @property string $website
 * @property array $images
 * @property array $detail_content
 */
class ProjectDetail extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'project_id', 'email', 'discord', 'medium', 'instagram', 'facebook', 'twitter', 'website', 'images', 'detail_content'
    ];

    protected $casts = [
        'images' => 'array',
        'detail_content' => 'array'
    ];
}
