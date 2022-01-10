<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Event;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::factory([
            'email'=> 'admin@admin.com',
            'name' => 'Admin',
            'isAdmin' => true,
        ])->create();
        
        Event::factory(10)->create();
        User::factory (10)->create();
        
    }
}
