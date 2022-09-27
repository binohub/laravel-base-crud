<?php

use App\Models\Role;
use App\User;
use Illuminate\Database\Seeder;

class RoleUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = Role::all();
        $users = User::all();

        foreach ($users as $user) {
            if ($user->name == 'conan'){
                $user->roles()->attach([1]);
            }
            $randRole = Role::inRandomOrder()->limit(2)->get();
            $user->roles()->sync($randRole);
        }
    }
}
