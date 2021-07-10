<?php

namespace App\Http\Requests\Api\Data\Project;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'        => ['required'],
            'new_logo'    => [],
            'status'      => ['required'],
            'categories'  => ['required'],
            'description'     => ['required'],
            'start_date'  => ['required'],
            'end_date'    => ['required'],
            'email'       => ['required'],
            'twitter'     => ['required'],
            'new_images'  => [],
            'socials'     => [],
            'min_price'   => [],
            'max_price'   => [],
            'currency'    => [],
            'available_count'   => [],
            'website'   => []
        ];
    }
}
