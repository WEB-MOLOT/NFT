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
        return DB::transaction(static function() use ($attributes, $user) {
            $project = new Project();

            $project->name = $attributes['name'];
            $project->status = $attributes['status'];
            $project->currency = $attributes['currency'];
            $project->min_price = $attributes['min_price'];
            $project->max_price = $attributes['max_price'];
            $project->available_count = $attributes['available_count'];
            $project->content = $attributes['content'];
            $project->started_at = $attributes['start_date'];
            $project->ended_at = $attributes['end_date'];
            $project->user_id = $user->id ?? null;

            $project->save();


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

        if($data['active'] && !$data['upcoming']) {
            $builder->where('status', Project::STATUS_ACTIVE);
        }

        if ($data['upcoming'] && !$data['active']) {
            $builder->where('status', Project::STATUS_UPCOMING);
        }

//        if($data['categories'] ?? false) {
//            $builder->whereHas('categories', static fn(Builder $builder) => $builder->whereIn('id', $data['categories']));
//        }

        if($data['verified']) {
            $builder->where('is_verified', 1);
        }

        switch($data['sort_by']) {
            case FilterService::ORDER_TIME:
                $builder->orderBy('started_at');
                break;
            case FilterService::ORDER_PRICE:
                $builder->orderBy('price');
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
