<?php

use Illuminate\Database\Seeder;
use App\Models\Blog;
use App\Models\Comment;

class CommentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comments = factory(Comment::class, 50)->make();

        Comment::insert($comments->toArray());
        // DB::table('comments')->truncate();
    }


}
