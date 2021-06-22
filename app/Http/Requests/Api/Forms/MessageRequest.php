<?php

namespace App\Http\Requests\Api\Forms;

use App\Models\Messages\Message;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

/**
 * Class MessageRequest
 * @package App\Http\Requests\Api\Forms
 */
class MessageRequest extends FormRequest
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
            'telegram' => ['nullable', 'string', 'max:100'],
            'message' => ['required', 'string', 'max:1024'],
            'subject' => ['required', 'integer', Rule::in(Message::subjects())]
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
