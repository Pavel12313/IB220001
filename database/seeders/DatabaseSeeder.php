<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
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
        // Create 10 users with their associated tweets
        User::factory(10)->hasTweets(5)->create();

        // Alternatively, you can call specific seeders
        $this->call([
            UsersSeeder::class,
            TweetsSeeder::class,
        ]);

        // Create a specific user
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
