<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            //ordine, devo seedare prima gli users
            UsersTableSeeder::class,
            UserDetailsTableSeeder::class,
            RolesTableSeeder::class,
            RoleUserTableSeeder::class,
            PostsTableSeeder::class,        
        ]
        );
    }
}
