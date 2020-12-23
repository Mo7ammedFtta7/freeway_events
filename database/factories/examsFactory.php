<?php

namespace Database\Factories\Dashboard;

use App\Models\Dashboard\exams;
use Illuminate\Database\Eloquent\Factories\Factory;

class examsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = exams::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category' => $this->faker->word,
        'title' => $this->faker->word,
        'image' => $this->faker->word,
        'short_desc' => $this->faker->text,
        'long_desc' => $this->faker->text,
        'active' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->word,
        'deleted_at' => $this->faker->word
        ];
    }
}
