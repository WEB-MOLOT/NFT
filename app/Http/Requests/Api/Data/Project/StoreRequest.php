<?php

namespace App\Http\Requests\Api\Data\Project;

use App\Models\Category;
use App\Models\User;
use App\Services\FilterService;
use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Collection;

/**
 * Class StoreRequest
 * @property mixed categories
 * @property mixed socials
 *  * @property int $id
 * @property int $status
 * @property bool $is_verified
 * @property bool $is_published
 * @property string $name
 * @property string $logo
 * @property int $currency
 * @property int $min_price
 * @property int $max_price
 * @property int $available_count
 * @property string $description
 * @property Carbon $started_at
 * @property int $started_at_timezone
 * @property Carbon $ended_at
 * @property int $ended_at_timezone
 * @property int $user_id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property string $slug
 * @property ?User $user
 * @property mixed email
 * @property mixed twitter
 * @property mixed website
 * @property mixed images
 * @property mixed start_date
 * @property mixed end_date
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
            'status'      => ['required'],
            'categories'  => ['required'],
            'description' => ['required'],
            'start_date'  => ['required'],
            'end_date'    => ['required'],
            'email'       => ['required'],
            'twitter'     => ['required'],
            'images'      => [],
            'socials'     => [],
            'min_price'   => [],
            'max_price'   => [],
            'currency'    => [],
            'available_count'   => [],
            'website'   => []
        ];
    }
}
