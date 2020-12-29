<?php

namespace Database\Factories;

use App\Models\ClassRepresentative;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClassRepresentativeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ClassRepresentative::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->word,
            'last_name' => $this->faker->word,
            'registration_number' => $this->faker->word,
            'year_of_study' => $this->faker->randomDigitNotNull,
            'programme' => $this->faker->word,
            'gender' => $this->faker->randomElement(['male', 'female']),
            'created_at' => $this->faker->date('Y-m-d H:i:s'),
            'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
