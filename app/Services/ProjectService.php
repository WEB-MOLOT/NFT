<?php

namespace App\Services;

use App\Exceptions\ServiceException;
use App\Models\Project;
use App\Models\User;
use App\Support\Formatters\DateFormatter;
use Illuminate\Contracts\Pagination\CursorPaginator;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
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
        protected DateFormatter $dateFormatter,
        protected FilterService $filterService
    ) {}

    /**
     * @param array $attributes
     * @param User|null $user
     * @return Project
     * @throws Throwable
     */
    public function create(array $attributes, ?User $user): Project
    {
        $attributes['user_id'] = $user->id ?? null;

        $attributes['is_verified'] ??= false;
        $attributes['detail_content'] = [];
        $attributes['status'] = 1;
        $attributes['is_published'] = 1;
        $attributes['categories'] = json_decode($attributes['categories']);

        return DB::transaction(static function() use ($attributes) {
            $project = Project::create($attributes);
            $project->details()->create($attributes);

            $project->addMedia($attributes['logo'])->toMediaCollection('project_logo');

            foreach ($attributes['images'] as $image) {
                $project->addMedia($image)->toMediaCollection('project_images');
            }

            return $project;
        });
    }

    /**
     * @param Project $project
     * @param array $attribute
     * @return Project
     */
    public function update(Project $project, array $attribute): Project
    {
        return $project;
    }

    /**
     * @param array $data
     * @return CursorPaginator
     */
    public function getProjects(array $data): CursorPaginator
    {
        $builder = Project::isPublished();

        if($data['status'] ?? false) {
            $builder->where('status', $data['status']);
        }

        if($data['categories'] ?? false) {
            $builder->whereHas('categories', static fn(Builder $builder) => $builder->whereIn('id', $data['categories']));
        }

        if($data['verified'] ?? false) {
            $builder->where('is_verified', 1);
        }

        switch($data['order_by']) {
            case FilterService::ORDER_TIME:
                //
                break;
            case FilterService::ORDER_PRICE:
                //
                break;
            case FilterService::ORDER_RATING:
                $builder->orderBy('rating', $data['order_by_dir']);
                    break;
        }

        return $builder->cursorPaginate();
    }

    /**
     * @param Project $project
     */
    public function loadProjectDependencies(Project $project): void
    {
        $project->loadMissing('categories', '');
    }
}
