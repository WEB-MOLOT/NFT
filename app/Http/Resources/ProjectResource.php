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
            'slug' => $this->slug,
            'date' => $this->date($this->started_at, $this->ended_at),
            'timer' => $this->getTimer($this->started_at),
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

    protected function date($startDate, $endDate) {
        $startDate = Carbon::make($startDate);
        $endDate = Carbon::make($endDate);

        if ($startDate && !Carbon::now()->gt($startDate)) {
            if ($startDate->diffInDays(Carbon::now()) > 3) {
                return 'Start ' . Carbon::parse($startDate)->format('d F');
            }

            if ($startDate->diffInDays(Carbon::now()) > 2) {
                return '3 days to start';
            }

            if ($startDate->diffInHours(Carbon::now()) > 1 && $startDate->diffInHours(Carbon::now()) < 24) {
                return $startDate->diffInHours(Carbon::now()) . ' hours to start';
            }

            if ($startDate->diffInMinutes(Carbon::now()) < 60) {
                return $startDate->diffInMinutes(Carbon::now()) . ' MIN TO START';
            }
        }

        if ($endDate && !Carbon::now()->gt($endDate) && Carbon::now()->gt($startDate)) {
            if ($endDate->diffInDays(Carbon::now()) > 3) {
                return 'Start' . Carbon::parse($endDate)->format('d F');
            }

            if ($startDate->diffInDays(Carbon::now()) > 2) {
                return '3 days to start';
            }

            if ($endDate->diffInHours(Carbon::now()) > 1 && $endDate->diffInHours(Carbon::now()) < 24) {
                return $endDate->diffInHours(Carbon::now()) . ' hours to start';
            }

            if ($endDate->diffInMinutes(Carbon::now()) < 60) {
                return $endDate->diffInMinutes(Carbon::now()) . ' MIN TO START';
            }
        }
    }

    protected function getTimer($startDate) {
        $startDate = Carbon::make($startDate);

        if (Carbon::now()->gt($startDate)) {
            return null;
        }

        return $startDate->diffInSeconds(Carbon::now());
    }
}
