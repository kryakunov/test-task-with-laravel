<?php

namespace Database\Seeders;

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
        \App\Models\Post::factory()->create();
        $this->call(PostsTableSeeder::class);

        \App\Models\Mixes::factory()->create();
        $this->call(MixesSeed::class);

        \App\Models\User::create([
            'name' => 'root',
            'email' => 'root@root.ru',
            'password' => 'root',
        ]);
    }
}
