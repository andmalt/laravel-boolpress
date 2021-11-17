<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\UserInfo;

class UserInfoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 10; $i++){
            $userInfo = new UserInfo();
            $userInfo->phone = $faker->phoneNumber();
            $userInfo->country = $faker->country();
            $userInfo->address = $faker->address();
            $userInfo->save();
        }
    }
}
