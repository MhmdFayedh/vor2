<?php

namespace Database\Factories;

use App\Models\Request;
use Clockwork\Support\Laravel\Facade;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Schedule>
 */
class ScheduleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'start_date' => fake()->date(),
            'finished_date' => fake()->date('Y-m-d', 'tomorrow'),
            'start_time' => fake()->time(),
            'finished_time' => fake()->time('H:i:s','tomorrow'),
            'volunteers_number' => fake()->biasedNumberBetween,
            'request_id' => Request::factory()
        ];
    }
}
