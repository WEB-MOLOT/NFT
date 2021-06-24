<?php

namespace App\Support\DataTable;

use App\Http\Requests\Manage\DataFilterRequest;
use App\Support\JsonResponse;
use Closure;
use Illuminate\Database\Eloquent\Builder;
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

        return JsonResponse::dataTable($items, $count);
    }
}
