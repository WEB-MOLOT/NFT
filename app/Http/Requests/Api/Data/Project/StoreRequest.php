<?php

namespace App\Http\Requests\Api\Data\Project;

use App\Services\FilterService;
use Illuminate\Foundation\Http\FormRequest;

/**
 * Class StoreRequest
 * @package App\Http\Requests\Api\Data\Project
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
            'name'        => ['required'],
            'logo'        => ['required'],
            'active'      => ['required'],
            'upcoming'    => ['required'],
            'categories'  => ['required'],
            'content'     => ['required'],
            'start_date'  => ['required'],
            'end_date'    => ['required'],
            'currency'    => [],
            'email'       => ['required'],
            'twitter'     => ['required'],
            'images'      => [],
            'socials'     => [],
            'min_price'   => [],
            'max_price'   => [],
            'available_count'   => [],
            'website'   => []
        ];
    }
}
