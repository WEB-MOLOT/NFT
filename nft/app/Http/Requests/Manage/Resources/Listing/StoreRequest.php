<?php

namespace App\Http\Requests\Manage\Resources\Listing;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class StoreRequest
 * @package App\Http\Requests\Manage\Resources\Category
 */
class StoreRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:100'],
            'amount' => ['nullable', 'integer', 'min:1'],
            'sort' => ['required', 'integer', 'min:1'],
            'content' => ['required', 'string']
        ];
    }
}
