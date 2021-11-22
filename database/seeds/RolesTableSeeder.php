<?php

use Illuminate\Database\Seeder;
use App\Models\Role;
use Faker\Generator as Faker;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $roleList = ['Amministratore','Editore','Redattore','Scrittore','Lettore'];


        for($i = 1; $i <= count($roleList); $i++){
            $newRole = new Role();
            $newRole->rank = $i;
            $newRole->name = $roleList[$i-1];
            $newRole->color = $faker->hexColor();

            $newRole->save();
        }
    }
}
