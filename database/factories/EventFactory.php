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
            'event_date'=> $this->faker->dateTime(),
            'img'=> $this->faker->imageUrl(),
            'description'=> $this->faker->text(),
            'max_users'=> $this->faker->numberBetween(20,30),
            'is_it_featured'=> $this->faker->boolean(),
            'link'=>$this->faker->url(),
        ];
    }
}
