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
            //
            'first_name'=> $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'registration_number' => $this->faker->unique()->swiftBicNumber,
            'year_of_study'=> $this->faker->year,
            'programme'=> $this->faker->jobTitle,
            'gender'=> $this->faker->randomElements(['male','female'])

        ];
    }
}
