<?php

namespace App\Http\Requests\Manage\Resources\Category;

use App\Rules\ColorCode;
use App\Rules\Slug;
use App\Support\PageTemplates\Builder;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

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
            'slug' => ['required', new Slug, 'max:100', 'unique:categories'],

            'color_code' => ['required', new ColorCode],
            'image' => ['required', 'image'],

            'meta' => ['required', 'array'],
            'meta.title' => ['nullable', 'string', 'max:255'],
            'meta.description' => ['nullable', 'string', 'max:255']
        ];
    }
}
