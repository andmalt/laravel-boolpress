<?php

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categoryNames = ['JavaScript','PHP','Java','C#','C++','Python','Swift','Go'];

        foreach($categoryNames as $name){
            $category = new Category();

            $category->name = $name; 
            $category->save();       
        }
    }
}
