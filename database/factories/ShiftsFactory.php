<?php

namespace Database\Factories;

use App\Models\Employees;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Shifts>
 */
class ShiftsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'employees_id' => $this->faker->numberBetween(1, Employees::all()->count()),
            'clock_in' => $this->faker->randomElement(['07:00:30', '06:59:30', '06:00:30', '08:00:30']),
            'clock_out' => $this->faker->randomElement(['17:00:30', '16:59:30', '16:00:30', '19:00:30'])
        ];
    }
}
