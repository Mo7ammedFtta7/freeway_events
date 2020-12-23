<?php

namespace Database\Factories;

use App\Models\faqs;
use Illuminate\Database\Eloquent\Factories\Factory;

class faqsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = faqs::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->text,
        'answer' => $this->faker->text,
        'active' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->word,
        'deleted_at' => $this->faker->word
        ];
    }
}
