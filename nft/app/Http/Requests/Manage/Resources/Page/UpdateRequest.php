<?php

namespace App\Http\Requests\Manage\Resources\Page;

use App\Rules\Slug;
use Illuminate\Validation\Rule;

/**
 * Class UpdateRequest
 * @package App\Http\Requests\Manage\Resources\Page
 */
class UpdateRequest extends StoreRequest
{
    /**
     * @return array
     */
    public function rules(): array
    {
        $rules = parent::rules();
        $rules['slug'] = ['required', new Slug, 'max:100', Rule::unique('pages')->whereNot('id', $this->route()->parameter('page')->id)];
        $rules['data'] = ['nullable', 'array'];

        unset($rules['template']);

        return $rules;
    }
}
