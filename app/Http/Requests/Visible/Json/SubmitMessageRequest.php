<?php

namespace App\Http\Requests\Visible\Json;

use App\Models\Messages\Message;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

/**
 * Class SubmitMessageRequest
 * @package App\Http\Requests\Visible\Json
 */
class SubmitMessageRequest extends FormRequest
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
