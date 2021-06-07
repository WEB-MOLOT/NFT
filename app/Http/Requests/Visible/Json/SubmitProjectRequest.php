<?php

namespace App\Http\Requests\Visible\Json;

use App\Rules\ColorCode;
use App\Rules\Slug;
use Illuminate\Foundation\Http\FormRequest;

/**
 * Class StoreRequest
 * @package App\Http\Requests\Manage\Resources\Category
 */
class SubmitProjectRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [

        ];
    }
}
