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
     * 
     */
    protected $model=\App\Models\Student::class;
    public function definition()
    {
        return [
            'firstname'=> fake()->name(),
            'lastname'=>fake()->name(),
            'email'=>fake()->unique()->safeEmail(),
            'phone'=>fake()->phoneNumber(),
            'address'=>fake()->address()
            //
        ];
    }
}
