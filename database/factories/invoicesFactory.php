<?php

namespace Database\Factories;

use App\Models\invoices;
use Illuminate\Database\Eloquent\Factories\Factory;

class invoicesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = invoices::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'uuid' => $this->faker->word,
        'payload' => $this->faker->text,
        'response' => $this->faker->text,
        'status' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
