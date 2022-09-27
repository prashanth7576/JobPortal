<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Appexperience>
 */
class AppexperienceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'Applicant_Id' => $this->faker->Applicant_Id(),
            'Company_Name' => $this->faker->Company_Name(),
            'Company_Website' => $this->faker->Company_Website(),
            'Job_Position' => $this->faker->Job_Position(),
            'Company_City' => $this->faker->Company_City(),
            'Emp_Start_Date' => $this->faker->Emp_Start_Date(),
            'Emp_End_Date' => $this->faker->Emp_End_Date(),
            'Remarks' => $this->faker->Remarks(),
        ];
    }
}
