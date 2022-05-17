<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //User::factory(10)->create();

        User::factory()->create([
           'name' => 'user1',
           'email' => 'user1@gmail.com',
        ]);
        User::factory()->create([
            'name' => 'user2',
            'email' => 'user2@gmail.com',
         ]);
         User::factory()->create([
            'name' => 'user3',
            'email' => 'user3@gmail.com',
         ]);
         User::factory()->create([
             'name' => 'user4',
             'email' => 'user4@gmail.com',
         ]);
         User::factory()->create([
            'name' => 'user5',
            'email' => 'user5@gmail.com',
         ]);

        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'isAdmin' =>true,
        ]);

        Grades::factory()->create([
            '',
        ])
    }
}
