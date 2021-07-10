<?php

namespace Database\Factories;

use App\Models\Project;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Project::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'status' => rand(1, 2),
            'is_verified' => array_rand([false, true]),
            'is_published' => array_rand([false, true]),
            'name' => $this->faker->name(),
            'currency' => array_rand(['USD', 'ETH', 'BNB']),
            'min_price' => rand(0, 999),
            'max_price' => rand(0, 999),
            'available_count' => rand(1, 1234),
            'started_at' => $this->faker->dateTime,
            'started_at_timezone' => $this->faker->timezone,
            'ended_at' => $this->faker->dateTime,
            'ended_at_timezone' => $this->faker->timezone,
            'description' => $this->faker->text,
            'email' => $this->faker->email,
            'twitter' => $this->faker->phoneNumber,
            'website' => $this->faker->text(45),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ];
    }
}
