<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Event;


class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()

    {
        $event = Event::factory([
        'event_date'=> "2024-01-11 07:55:07"     
        ])->create();

        Event::factory(10)->create();
    }


}
