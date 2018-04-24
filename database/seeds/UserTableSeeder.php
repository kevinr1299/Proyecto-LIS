<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user_vet = Role::where('Name','Veterinario')->first();
        $user_sec = Role::where('Name','Secretaria')->first();

        $user = new User();
        $user->name = "Kevin Romero";
        $user->email = "a1299r5@gmail.com";
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($user_vet);

        $user = new User();
        $user->name = "Diego Vasquez";
        $user->email = "arias@gmail.com";
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($user_sec);
    }
}
