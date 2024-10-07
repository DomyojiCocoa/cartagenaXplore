<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(RoleSeeder::class);
        $this->call(SiteSeeder::class);
        $this->call(UserSeeder::class);
        User::create([
            'name' => 'Cocoa',
            'password' => bcrypt('123456'),
            'email' => 'jesus@gmail.com'
        ]);

    }
}
