<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'Company_id' => $this->faker->CompanyId(),
            'CompanyName' => $this->faker->CompanyName(),
            'Email' => $this->faker->Email(),
            'Website' => $this->faker->Website(),
            'Address' => $this->faker->Address(),
            'ContactNo' => $this->faker->ContactNo(),
            'Bank_Details' => $this->faker->Bank_Details(),
            'Adhar' => $this->faker->Adhar(),
            'PAN' => $this->faker->PAN(),
            
        ];
    }
}
