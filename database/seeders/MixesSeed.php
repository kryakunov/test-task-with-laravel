<?php

namespace Database\Seeders;

use App\Models\Mixes;
use App\Models\Post;
use Illuminate\Database\Seeder;

class MixesSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */


    public function run()
    {
        for($i = 0; $i < 99; $i++)
        {
            $posts = Post::where('id', '>', $i)->take(10)->get()->toJson();

            $res = Mixes::create([
                'items' => $posts,
            ]);
        }
    }

}
