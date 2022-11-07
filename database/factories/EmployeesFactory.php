<?php

namespace Database\Factories;

use App\Models\Branches;
use App\Models\Genre;
use App\Models\Turns;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employees>
 */
class EmployeesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'branches_id' => $this->faker->numberBetween(1, Branches::all()->count()),
            'employee_code' => $this->faker->numberBetween(1000, 8000),
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'birthdate' => $this->faker->date('Y-m-d', '-20 years'),
            'email' => $this->faker->email(),
            'country_id' => $this->faker->numberBetween(1, 200),
            'city' => $this->faker->city(),
            'address' => $this->faker->address(),
            'phone' => $this->faker->phoneNumber(),
            'hiring_date' => $this->faker->dateTimeBetween('-1 years', 'now'),
            'status' => $this->faker->boolean(),
            'genre_id' => $this->faker->numberBetween(1, Genre::all()->count()),
            'turns_id' => $this->faker->numberBetween(1, Turns::all()->count())
        ];
    }
}
