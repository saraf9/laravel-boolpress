<?php
use Illuminate\Database\Seeder;

use App\Category;
use App\Post;
use App\Author;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          factory(App\Post::class, 100)->make()->each(function($post){

              $author = Author::inRandomOrder()->first();
              $post->author()->associate($author);
              $post->save();

              $category = Category::inRandomOrder()->take(rand(1, 5))->get();
              $post->categories()->attach($category);
            });
    }
}
