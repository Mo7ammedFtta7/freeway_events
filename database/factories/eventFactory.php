<?php

namespace Database\Factories;

use App\Models\event;
use Illuminate\Database\Eloquent\Factories\Factory;

class eventFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = event::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word,
        'location' => $this->faker->word,
        'short_desc' => $this->faker->text,
        'long_desc' => $this->faker->text,
        'event_start_datetime' => $this->faker->date('Y-m-d H:i:s'),
        'event_end_datetime' => $this->faker->date('Y-m-d H:i:s'),
        'tickets_start_datetime' => $this->faker->date('Y-m-d H:i:s'),
        'tickets_end_datetime' => $this->faker->date('Y-m-d H:i:s'),
        'image' => $this->faker->word,
        'ticket_purchase_price' => $this->faker->randomDigitNotNull,
        'ticket_selling_price' => $this->faker->randomDigitNotNull,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->word,
        'deleted_at' => $this->faker->word
        ];
    }
}
