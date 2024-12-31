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
        \App\Models\User::factory(10)->create();
        \App\Models\Task::factory(20)->create();

/*        User::factory()->create([
            'name' => 'Test User 2',
            'email' => 'test2@example.com',
        ]);
*/

    }
}
