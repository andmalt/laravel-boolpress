<?php

use Illuminate\Database\Seeder;
use App\Models\Tag;
use Faker\Generator as Faker;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $tagNames = ['Backend','Frontend','ML','Fullstack','Design'];

        foreach($tagNames as $name){
            $newTag = new Tag();
            $newTag->name = $name;
            $newTag->color = $faker->hexColor();

            $newTag->save();
        }
    }
}
