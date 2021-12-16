<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->company(),
            // 'event_date'=> $this->faker->title(),
            // 'img'=> $this->faker->image(),
            // 'description'=> $this->faker->text(),
            // 'max_users'=> $this->faker->title(),
            // 'is_it_featured'=> $this->faker->title(),
        ];
    }
}
