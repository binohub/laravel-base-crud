<?php

use App\Models\Post;
use App\User;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $users = User::all();
        for ($i = 0; $i < 55; $i++) {
            $newPost = new Post();
            $newPost->user_id = $faker->randomElement($users)->id;
            $newPost->author = $faker->userName();
            $newPost->title = $faker->realText(35);
            $newPost->description = $faker->paragraphs(5, true);
            $newPost->image = $faker->imageUrl();
            $newPost->date = $faker->date();
            
            $newPost->save();
        }
    }
}
