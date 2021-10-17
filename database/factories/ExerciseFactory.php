<?php

namespace Database\Factories;

use App\Models\Exercise;
use Illuminate\Database\Eloquent\Factories\Factory;

class ExerciseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Exercise::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->text(64),
            'description' => $this->faker->text(600),
            'price' => $this->faker->unique->numberBetween(100, 1000),
            'popularity' => $this->faker->numberBetween(1, 10),
            'startDate' => $this->faker->dateTimeBetween('+0 days', '+1 month'),
            'endDate' => $this->faker->dateTimeBetween('+1 month', '+2 month')
        ];
    }
}
