<?php

namespace App\Http\Requests\Api\Data\Project;

use App\Models\Project;
use App\Services\FilterService;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

/**
 * Class IndexRequest
 * @package App\Http\Requests\Api\Data\Project
 */
class IndexRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'status' => ['nullable', Rule::in(Project::statuses())],
            'categories' => ['nullable', 'array', 'max:10'],
            'categories.*' => ['integer', 'exists:categories,id'],
            'order_by' => ['nullable', 'integer', Rule::in(FilterService::order())],
            'order_by_dir' => ['required_with:order_by', 'string', 'in:asc,desc'],
            'min_price' => ['nullable', 'integer', 'min:0'],
            'max_price' => ['required_with:min_price', 'nullable', 'integer', 'gt:min_price']
        ];
    }

    /**
     * @return array
     */
    public function validated(): array
    {
        $data =  parent::validated();
        $data['verified'] = $this->boolean('verified');
        $data['order_by'] ??= FilterService::DEFAULT_ORDER;
        $data['order_by_dir'] ??= FilterService::DEFAULT_ORDER_DIRECTION;

        return $data;
    }
}
