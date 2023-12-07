<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $user = User::factory(10)
            ->create();

        $post = Post::factory()->recycle($user)->create();
        
        $comment = Comment::factory()
            ->recycle($user)
            ->recycle($post)
            ->create();

        $bokele = User::factory()
            ->has(Post::factory()->count(45))
            ->has(Comment::factory(120)->recycle($post))
            ->create([
                'name' => 'bokele wakiza franck',
                'email' => 'test@example.com',
            ]);
    }
}