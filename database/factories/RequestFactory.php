<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Request>
 */
class RequestFactory extends Factory
{
    protected Array $classification = ['opportunity', 'initiative'];
    protected Array $status = ['accepted', 'rejected', 'pending'];
    protected Array $type = ['صحية', 'تقنية', 'أجتماعية', 'أدارية'];
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => User::factory([
                'role' => 'supervisor'
            ]),
            'name' => fake()->sentence(),
            'type' => $this->type[array_rand($this->type, 1)],
            'classification' => $this->classification[array_rand($this->classification, 1)],
            'duration' => fake()->biasedNumberBetween,
            'external_side' => fake()->company(),
            'area' => fake()->address(),
            'profession' => fake()->jobTitle(),
            'explained' => fake()->paragraph(),
            'volunteers_role' => fake()->paragraph(),
            'facility_name' => fake()->company(),
            'department' => fake()->companySuffix(),
            'status' => $this->status[array_rand($this->status, 1)],
            'start_date' => fake()->date('Y-m-d'),
            'finished_date' => fake()->date('Y-m-d', 'after:start_date'),
            'start_time' => fake()->time('H:i'),
            'finished_time' => fake()->time('H:i', 'after:start_time'),
            'volunteers_number' => fake()->biasedNumberBetween


        ];
    }
}
