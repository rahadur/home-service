<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Role::create([
          'name' => 'Admin',
          'description' => 'This is a Website admin user'
        ]);

        \App\Role::create([
          'name' => 'Worker',
          'description' => 'This is a service worker'
        ]);

        \App\Role::create([
          'name' => 'User',
          'description' => 'This is a service user'
        ]);
    }
}
