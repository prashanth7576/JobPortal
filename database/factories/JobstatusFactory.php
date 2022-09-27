<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Jobstatus>
 */
class JobstatusFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'JobStatusId' => $this->faker->JobStatusId(),
            'StatusDescription' => $this->faker->StatusDescription(),
            'Remarks' => $this->faker->Remarks(),
        ];
    }
}
