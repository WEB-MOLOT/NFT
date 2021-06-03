<?php

namespace App\Http\Requests\Manage\Resources\Page;

use App\Rules\Slug;
use App\Support\PageTemplates\Builder;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

/**
 * Class StoreRequest
 * @package App\Http\Requests\Manage\Resources\Page
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
            'slug' => ['required', new Slug, 'max:100', 'unique:pages'],
            'template' => ['required', 'string', Rule::in((new Builder)->ids())],

            'meta' => ['required', 'array'],
            'meta.title' => ['nullable', 'string', 'max:255'],
            'meta.description' => ['nullable', 'string', 'max:255']
        ];
    }

    /**
     * @return array
     */
    public function validated(): array
    {
        $data = parent::validated();
        $data['is_active'] = $this->has('is_active');
        $data['is_index'] = $this->has('is_index');

        return $data;
    }
}
