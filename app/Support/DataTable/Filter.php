<?php

namespace App\Support\DataTable;

use App\Http\Requests\Manage\DataFilterRequest;
use App\Support\JsonResponse;
use App\Traits\Model\Actions;
use App\Traits\Model\FormattedJsonDates;
use Closure;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;

/**
 * Class Filter
 * @package App\Support\DataTable
 */
class Filter
{
    protected ?Builder $builder = null;

    /**
     * Filter constructor.
     * @param DataFilterRequest $request
     */
    public function __construct(protected DataFilterRequest $request)
    {
    }

    /**
     * @param string|Builder $builder
     * @return $this
     */
    public function setBuilder(Builder|string $builder): self
    {
        $this->builder = is_string($builder) ? (new $builder)->query() : $builder;



        return $this;
    }

    /**
     * @param array $rules
     * @param Closure $filter
     * @return $this
     */
    public function search(array $rules, Closure $filter): self
    {
        $rules = Collection::make($rules)
            ->mapWithKeys(static fn($i, string $k) => ["filter.$k" => $i])->all();

        $validated = Collection::make(Arr::dot($this->request->validate($rules)))
            ->mapWithKeys(static fn($i, string $k): array => [Str::after($k, 'filter.') => $i])->all();

        $this->builder()->where(static fn(Builder $builder) => $filter($builder, $validated));

        return $this;
    }

    /**
     * @throws BuilderFailureException
     */
    public function order(): void
    {
        $this->builder->orderBy(...$this->request->orderBy());
    }

    /**
     * @return Builder
     */
    public function builder(): Builder
    {
        return $this->builder;
    }

    /**
     * @return DataFilterRequest
     */
    public function request(): DataFilterRequest
    {
        return $this->request;
    }

    /**
     * @return JsonResponse
     */
    public function toJsonResponse(): JsonResponse
    {
        $items = (clone $this->builder())->offset($this->request->offset())->limit($this->request->length())->get();
        $count = (clone $this->builder())->count();

        $items->each(fn(Model $model) => $this->appendManageAttributesIfExists($model));

        return JsonResponse::dataTable($items, $count);
    }

    /**
     * @param Model $model
     */
    protected function appendManageAttributesIfExists(Model $model): void
    {
        $modelTraits = (new \ReflectionClass($model))->getTraitNames();

        if(in_array(Actions::class, $modelTraits)) {
            $model->append('actions');
        }

        if(in_array(FormattedJsonDates::class, $modelTraits)) {
            $model->append('formatted_created_at', 'formatted_updated_at');
        }
    }
}
