<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Applicant>
 */
class ApplicantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
   
            'First_Name' => $this->faker->First_Name(),
            'Last_Name' => $this->faker->Last_Name(),
            'Profile_url' => $this->faker->Profile_url(),
            'Rating' => $this->faker->Rating(),
            'Status' => $this->faker->Status(),

        ];
    }
}
