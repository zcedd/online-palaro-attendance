<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Delegate>
 */
class DelegateFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'delegation_id' => 1,
            'first_name' => $this->faker->firstName(),
            'middle_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'suffix' => $this->faker->suffix(),
            'gender' => 'male',
            'birthday' => $this->faker->date(),
            'contact_number' => $this->faker->phoneNumber(),
            'email' => $this->faker->email(),
            'profile_photo_path' => $this->faker->imageUrl(),
            'address' => $this->faker->address(),
        ];
    }
}
