<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create(
            [
                'name' => 'nadie',
                'email' => 'nadiaaliyanazira@mail.ugm.ac.id',
                'password' => bcrypt('admin'),
            ]
        );
        User::factory()->create(
            [
                'name' => 'nadia',
                'email' => 'aidanayilaa@gmail.com',
                'password' => bcrypt('helo'),
            ]
        );
    }
}
