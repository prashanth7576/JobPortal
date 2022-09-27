<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Appstatus>
 */
class AppstatusFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'Applicant_Status_Id' => $this->faker->Applicant_Status_Id(),
            'Applicant_Status_Description' => $this->faker->Applicant_Status_Description(),
        ];
    }
}
