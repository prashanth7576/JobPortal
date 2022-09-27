<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Skill>
 */
class SkillFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'SkillsId' => $this->faker->SkillsId(),
            'Description' => $this->faker->Description(),
            'Remarks' =>  $this->faker->Remarks(),
        ];
    }
}
