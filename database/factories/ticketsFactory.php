<?php

namespace Database\Factories;

use App\Models\tickets;
use Illuminate\Database\Eloquent\Factories\Factory;

class ticketsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = tickets::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'uuid' => $this->faker->word,
        'event_id' => $this->faker->word,
        'fullname' => $this->faker->word,
        'email' => $this->faker->word,
        'phone' => $this->faker->word,
        'Identity_type' => $this->faker->word,
        'Identity_number' => $this->faker->word,
        'invoice_uuid' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->word,
        'deleted_at' => $this->faker->word
        ];
    }
}
