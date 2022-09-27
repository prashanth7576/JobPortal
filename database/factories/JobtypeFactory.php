<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Jobtype>
 */
class JobtypeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'Job_Id' => $this->faker->Job_Id(),
            'Job_Description' => $this->faker->Job_Description(),
            'Remarks' => $this->faker->Remarks(),
        ];
    }
}
