<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Auth;

class ProjectResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {

        return [
            'id' => $this->id,
            'name' => $this->name,
            'status' => $this->status,
            'verified' => $this->is_verified,
            'published' => $this->is_published,
            'logo' => $this->getMedia('project_logo')->first()->getFullUrl(),
            'images' => $this->getMedia('project_images'),
            'categories' => $this->categories()->get(),
            'currency' => $this->currency,
            'min_price' => $this->min_price,
            'max_price' => $this->max_price,
            'available_count' => $this->available_count,
            'description' => $this->description,
            'start_date' => Carbon::parse($this->started_at)->format('Y-m-d, H:i') . ', ' . $this->started_at_timezone,
            'end_date' => Carbon::parse($this->ended_at)->format('Y-m-d, H:i') . ', ' . $this->ended_at_timezone,
            'start_date_timezone' => $this->started_at_timezone,
            'end_date_timezone' => $this->ended_at_timezone,
            'rating' => $this->rating,
            'email' => $this->email,
            'website' => $this->website,
            'socials' => $this->socials()->get(),
            'created_at' => Carbon::parse($this->created_at)->format('d.m.Y H:i'),
            'subscribers' => $this->subscribers()->get(),
            'twitter' => $this->twitter
        ];
    }
}
