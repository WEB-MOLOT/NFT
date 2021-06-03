<?php

namespace App\Http\Requests\Manage;

use App\Support\DataTable\BuilderFailureException;
use Illuminate\Foundation\Http\FormRequest;

/**
 * Class DataFilterRequest
 * @package App\Http\Requests\Manage
 */
class DataFilterRequest extends FormRequest
{
    protected array $orderColumns = [];

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'start' => 'required|integer|min:0',
            'length' => 'required|integer|min:1|max:100',

            'columns' => 'required|array|min:1',
            'columns.*.data' => 'required|string',

            'order' => 'required|array|min:1',
            'order.*.column' => 'required|integer|min:0',
            'order.*.dir' => 'required|string|in:asc,desc'
        ];
    }

    /**
     * @param string ...$columns
     * @return $this
     */
    public function setOrderColumns(...$columns): self
    {
        $this->orderColumns = $columns;

        return $this;
    }

    /**
     * @return array
     * @throws BuilderFailureException
     */
    public function orderBy(): array
    {
        $validated = $this->validated();

        $direction = $validated['order'][0]['dir'];
        $column = $validated['columns'][$validated['order'][0]['column']]['data'] ?? null;

        if($column === null) {
            throw new BuilderFailureException('Column doesnt exists.');
        }

        if(!in_array($column, $this->orderColumns)) {
            throw new BuilderFailureException("Column $column not found in available columns.");
        }

        return [$column, $direction];
    }

    /**
     * @return int
     */
    public function length(): int
    {
        return $this->validated()['length'];
    }

    /**
     * @return int
     */
    public function offset(): int
    {
        return $this->validated()['start'];
    }
}
