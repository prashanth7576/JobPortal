<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Appeducation>
 */
class AppeducationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [

            'ApplicantId' => $this->faker->ApplicantId(),
            'Institute' => $this->faker->Institute(),
            'Type_of_Certificate' => $this->faker->Type_of_Certificate(),
            'Year_of_Passing' => $this->faker->Year_of_Passing(),
            'Percentage' => $this->faker->Percentage(),
            'Institute_Location' => $this->faker->Institute_Location(),
            'Institute_City' => $this->faker->Institute_City(),
            'Institute_State' => $this->faker->Institute_State(),
            'Institute_Country' => $this->faker->Institute_Country(),
            'Remarks' => $this->faker->Remarks(),
        ];
    }
}
