<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use App\Models\Role;
use App\User;


class RoleUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roleIds = Role::pluck('id')->toArray();
        $users = User::all();


        foreach($users as $user){
            $user->roles()->attach(Arr::random($roleIds));
        }

        
    }
}
