<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

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
            'name' => $this->name,
            'status' => $this->status,
            'verified' => $this->is_verified,
            'logo' => $this->getMedia('project_logo')->first()->getFullUrl(),
            'images' => $this->getMedia('project_images'),
            'categories' => $this->categories()->get(),
            'currency' => $this->currency,
            'min_price' => $this->min_price,
            'max_price' => $this->max_price,
            'available_count' => $this->available_count,
            'content' => $this->content,
            'rating' => $this->rating,
            'email' => $this->email,
            'website' => $this->website,
            'socials' => $this->socials()->get()
        ];
    }
}
