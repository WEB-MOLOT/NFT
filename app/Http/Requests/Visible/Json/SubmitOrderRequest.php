<?php

namespace App\Http\Requests\Visible\Json;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class SubmitOrderRequest
 * @package App\Http\Requests\Visible\Json
 */
class SubmitOrderRequest extends FormRequest
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
            'email' => ['required', 'email', 'max:100'],
            'listing_id' => ['required', 'integer', 'exists:listings,id'],
            'message' => ['required', 'string', 'max:1024']
        ];
    }

    /**
     * @return array
     */
    public function validated(): array
    {
        $data =  parent::validated();
        $data['ip'] = $this->ip();

        return $data;
    }
}
