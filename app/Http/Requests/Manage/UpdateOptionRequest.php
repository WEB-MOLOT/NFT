<?php

namespace App\Http\Requests\Manage;

use App\Rules\ColorCode;
use App\Rules\Slug;
use App\Support\PageTemplates\Builder;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

/**
 * Class UpdateOptionRequest
 * @package App\Http\Requests\Manage
 */
class UpdateOptionRequest extends FormRequest
{
    protected array $nullableString = ['nullable', 'string', 'max:255'];

    protected array $requiredString = ['required', 'string', 'max:255'];

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'site_name' => $this->requiredString,
            'email' => ['required', 'email', 'max:255'],

            'connections.google.client_id' => $this->requiredString,
            'connections.google.client_secret' => $this->requiredString,

            'connections.twitter.client_id' => $this->requiredString,
            'connections.twitter.client_secret' => $this->requiredString,

            'connections.telegram.bot' => $this->requiredString,
            'connections.telegram.client_secret' => $this->requiredString,
        ];
    }
}
