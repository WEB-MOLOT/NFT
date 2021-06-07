<?php

namespace App\Http\Requests\Manage\Resources\Category;

use App\Rules\Slug;
use Illuminate\Validation\Rule;

/**
 * Class UpdateRequest
 * @package App\Http\Requests\Manage\Resources\Category
 */
class UpdateRequest extends StoreRequest
{
    /**
     * @return array
     */
    public function rules(): array
    {
        $rules = parent::rules();
        $rules['slug'] = ['required', new Slug, 'max:100', Rule::unique('categories')->whereNot('id', $this->route()->parameter('category')->id)];
        $rules['image'] = ['nullable', 'images'];

        return $rules;
    }
}
