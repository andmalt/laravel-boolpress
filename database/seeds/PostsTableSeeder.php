<?php

use Illuminate\Database\Seeder;
use App\Models\Post;
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
        for($i=0; $i<100; $i++){

            $newPost = new Post();
            $newPost->title = $faker->sentence(2);
            $newPost->author = $faker->name();
            $newPost->post_date = $faker->dateTime();
            $newPost->post_content = $faker->paragraph(7,true);
            $newPost->image_url = $faker->imageUrl(640,480,$newPost->title,true,$newPost->author, true);
            $newPost->save();
        }
    }
}
