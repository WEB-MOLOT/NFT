<?php

namespace App\Http\Requests\Api\Forms;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class OrderRequest
 * @package App\Http\Requests\Api\Forms
 */
class OrderRequest extends FormRequest
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
