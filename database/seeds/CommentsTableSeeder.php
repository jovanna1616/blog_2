<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Post::all()->each(function (App\Post $u) {
            $u->comments()->saveMany(factory(App\Comment::class, 6)->make());
        });
    }
}
