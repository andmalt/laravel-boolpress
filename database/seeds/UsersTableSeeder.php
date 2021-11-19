<?php
use App\User;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        $newUser = new User();
        $newUser->name = 'Andrea';
        $newUser->email = 'prova@gmail.com';
        $newUser->password = Hash::make('Ciccio88');
        $newUser->save();



        for($i = 0; $i < 19; $i++){
            $newUser = new User();
            $newUser->name = $faker->name();
            $newUser->email = $faker->email();
            $newUser->password = Hash::make($faker->password());
            $newUser->save();
        }
    }
}
