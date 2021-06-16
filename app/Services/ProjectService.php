<?php

namespace App\Services;

use App\Exceptions\ServiceException;
use App\Models\Project;
use App\Models\User;
use App\Support\Formatters\DateFormatter;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;
use Throwable;

/**
 * Class ProjectService
 * @package App\Services
 */
class ProjectService
{
    public function __construct(
        protected DateFormatter $dateFormatter
    )
    {
    }

    /**
     * @param array $attributes
     * @param User|null $user
     * @return Project
     * @throws Throwable
     */
    public function create(array $attributes, ?User $user): Project
    {
        $attributes['user_id'] = $user->id ?? null;
        $attributes['logo'] = $attributes['logo']->store('public/projects/logo');
        $attributes['images'] = array_map(static fn(UploadedFile $image): string => $image->store('public/projects/gallery'), $attributes['images'] ?? []);
        $attributes['is_verified'] ??= false;
        $attributes['detail_content'] = [];

        return DB::transaction(static function() use ($attributes) {
            $project = Project::create($attributes);
            $project->details()->create($attributes);

            return $project;
        });
    }
}
