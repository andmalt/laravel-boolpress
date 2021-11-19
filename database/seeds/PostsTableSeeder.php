<?php

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use App\Models\Post;
use App\User;
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
        $categories_id = Category::pluck('id')->toArray();
        $users_id = User::pluck('id')->toArray();


        for($i=0; $i<100; $i++){

            $newPost = new Post();
            $newPost->title = $faker->sentence(2);
            $newPost->user_id = Arr::random($users_id);
            $newPost->post_date = $faker->dateTime();
            $newPost->post_content = $faker->paragraph(7,true);
            $newPost->image_url = $faker->imageUrl(640,480,$newPost->title,true,$newPost->user_id, true);
            $newPost->category_id = Arr::random($categories_id);

            $newPost->save();
        }
    }
}
