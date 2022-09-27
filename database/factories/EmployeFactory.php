<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employe>
 */
class EmployeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            
            
 'Employee_Name' => $this->faker->Employee_Name(),
 'Position' => $this->faker->Position(),
 'Email' => $this->faker->unique()->safeEmail(),
 'Mobile_Num' => $this->faker->Mobile_Num(),
 'Team' => $this->faker->Team(),
 'Date' => $this->faker->Date(),
 'Status' => $this->faker->Status(),
        ];
    }
}
