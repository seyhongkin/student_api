<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $type = $this->faker->randomElement(['LOC', 'INT']);
        $nativeFName = $type === 'LOC' ? $this->faker->randomElement([
            "ព្រំ",
            "មាស",
            "ពេជ្យ",
            "ហេង",
            "ឌី",
        ]) : null;
        $nativeLName = $type === 'LOC' ? $this->faker->randomElement([
            "វាសនា",
            "ស្រីកា",
            "សីលា",
            "វុទ្ធី",
        ]) : null;
        $gender = $this->faker->randomElement(['Female', 'Male']);


        return [
            'native_name' => $nativeFName . " " . $nativeLName,
            'eng_name' => $this->faker->name(),
            'gender' => $gender,
            'dob' => $this->faker->dateTime(now()),
            'type' => $type,
            'email' => $this->faker->email(),
            'address' => $this->faker->address()
        ];
    }
}
