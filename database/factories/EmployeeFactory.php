<?php

namespace Database\Factories;

use Faker\Generator as Faker;
use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Employee::class;
    public function definition()
    {
        return [
            'name'=> ($this->faker->randomElement(['Femenino', 'Masculino']) == 'Femenino') ? $this->faker->firstNameFemale() : $this->faker->firstNameMale(),
            'lastname' => $this->faker->lastName(),
            'document'=> $this->faker->numerify('#########'),
            'email' => $this->faker->unique()->safeEmail(),
            'address' => $this->faker->address(),
            'phone' => $this->faker->e164PhoneNumber(),
            'avatar' => 'images/default.png',
            'gender' => $this->faker->randomElement(['Femenino', 'Masculino']),
            'jobs_id' => $this->faker->numberBetween($min = 1, $max = 2),
            'isUser' => $this->faker->numberBetween($min = 0, $max = 1),
            'birthday_date' => $this->faker->dateTimeBetween($startDate = '-18 years', $endDate = 'now')->format('Y-m-d'),
        ];
       
    }
}
 // $this->faker->sentence();
        // $this->faker->paragraph();
        // $this->faker->randomElement('texto1','texto2');