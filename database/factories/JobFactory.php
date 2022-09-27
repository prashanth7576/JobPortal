<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'JobId' => $this->faker->job_id(),
            'JobTitle' => $this->faker->JobTitle(),
            'JobRole' => $this->faker->JobRole(),
            'Description' => $this->faker->Description(),
            'Positions' => $this->faker->Positions(),
            'Location' => $this->faker->Location(),
            'AnnualSalary' => $this->faker->AnnualSalary(),
            'deptshortname' => $this->faker->deptshortname(),
            'Active' => $this->faker->Active(),
            'CreatedDate' => $this->faker->CreatedDate(),
            'CreatedBy' => $this->faker->CreatedBy(),
            'ApplyLink' => $this->faker->ApplyLink(),
            'CloseDate' => $this->faker->CloseDate()
        ];
    }
}
