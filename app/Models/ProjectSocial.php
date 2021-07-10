<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int|mixed project_id
 * @property mixed social_name
 * @property mixed social_data
 */
class ProjectSocial extends Model
{
    use HasFactory;
    protected $fillable = ['social_name', 'social_data', 'project_id'];
}
