<?php

namespace Database\Factories;

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
    public function definition(): array
    {
        $gender = ['male', 'female', 'other'];
        $maritalStatus = ['single', 'married', 'divorced', 'widowed'];
        $employmentStatus = ['permanent', 'contract', 'probation', 'intern'];
        $departments = ['Technology', 'Human Resources', 'Finance', 'Marketing', 'Operations'];
        $positions = ['Software Engineer', 'HR Manager', 'Accountant', 'Digital Marketer', 'Operations Lead'];

        return [
            'name' => $this->faker->name(),
            'nik' => $this->faker->nik(),
            'email' => $this->faker->unique()->safeEmail(),
            'gender' => $this->faker->randomElement($gender),
            'position' => $this->faker->randomElement($positions),
            'department' => $this->faker->randomElement($departments),
            'salery' => $this->faker->randomFloat(2, 5000000, 25000000),
            'marital_status' => $this->faker->randomElement($maritalStatus),
            'employment_status' => $this->faker->randomElement($employmentStatus),
        ];
    }
}
