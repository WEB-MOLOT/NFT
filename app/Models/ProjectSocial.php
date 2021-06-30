<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectSocial extends Model
{
    use HasFactory;
    protected $fillable = ['social_name', 'social_data', 'project_id'];
}
