<?php

namespace Database\Factories;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $employeesIds = Employee::pluck('id')->toArray();
        $counter = 1;
        return [
            'name' => $this->faker->unique()->userName(),
            'email' => $this->faker->unique()->safeEmail(),
            'password' => $this->faker->password(),
            'email_verified_at' => now(),
            'user_types_id' => $this->faker->numberBetween($min = 1, $max = 3),
            'employees_id' => function() use ($counter, $employeesIds) {
                $result = $employeesIds[$counter - 1];
                $counter++;
                return $result;
            },
        ];
    }
}
/*
        $user = new User;
        $user->name = 'rfreyrebrayaned';
        $user->email = 'rfreyrebrayaned@gmail.com';
        $user->password =bcrypt('123456789');
        $user->email_verified_at =now();
        $user->user_types_id =1;
        $user->employees_id =1;
        $user->save(); */