<?php

namespace App\Http\Requests\Visible\Json;

use App\Models\Project;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

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
            'name' => ['required', 'string', 'max:100'],
            'logo' => ['required', 'image'],
            'images' => ['nullable', 'array', 'max:10'],
            'images.*' => ['image'],
            'status' => ['required', Rule::in(Project::statuses())],
            'content' => ['required', 'string', 'max:1024'],

            'started_at' => ['required', 'date_format:d.m.Y, H:i'],
            'ended_at' => ['required', 'date_format:d.m.Y, H:i'],

            'currency' => ['nullable', Rule::in(Project::currencies())],
            'min_price' => ['nullable', 'numeric', 'min:0'],
            'max_price' => ['nullable', 'numeric', 'min:0'],
            'available_count' => ['nullable', 'integer', 'min:0', 'max:4294967295'],

            'website' => ['nullable', 'string', 'max:100'],
            'email' => ['required', 'email', 'max:100'],
            'twitter' => ['required', 'string', 'max:100'],
            'discord' => ['nullable', 'string', 'max:100'],
            'medium' => ['nullable', 'string', 'max:100']
        ];
    }
}
