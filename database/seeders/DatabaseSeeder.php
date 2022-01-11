<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Database\Seeders\EventSeeder;

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

        $user = User::factory([
            'email'=> 'user@user.com',
            'name' => 'user',
        ])->create();
        
       
        User::factory (10)->create();
        $this->call(EventSeeder::class);
    }
}
