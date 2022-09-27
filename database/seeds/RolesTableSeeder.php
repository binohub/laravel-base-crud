<?php

use App\Models\Role;
use Illuminate\Database\Seeder;
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

        $roles = ['super-admin', 'admin', 'moderator', 'editor', 'designer', 'member', 'registered'];
        foreach ($roles as $role) {
            $newRole = new Role();
            $newRole->name = $role;
            $newRole->save();
        }

    }
}
