<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $role_admin = \App\Role::where('name', 'admin')->first();
        $role_worker = \App\Role::where('name', 'worker')->first();
        $role_user = \App\Role::where('name', 'user')->first();


        \App\User::create([
            'location_id' => 1,
            'name' => 'Admin',
            'email' => 'admin@email.com',
            'password' => bcrypt('secret')
        ])->roles()->attach($role_admin);



        \App\User::create([
            'location_id' => 1,
            'name' => 'Worker',
            'email' => 'worker@email.com',
            'password' => bcrypt('secret')
        ])->roles()->attach($role_worker);

        \App\User::create([
            'location_id' => 1,
            'name' => 'Worker 1',
            'email' => 'worker1@email.com',
            'password' => bcrypt('secret')
        ])->roles()->attach($role_worker);

        \App\User::create([
            'location_id' => 2,
            'name' => 'Worker 2',
            'email' => 'worker2@email.com',
            'password' => bcrypt('secret')
        ])->roles()->attach($role_worker);

        \App\User::create([
            'location_id' => 3,
            'name' => 'Worker 3',
            'email' => 'worker3@email.com',
            'password' => bcrypt('secret')
        ])->roles()->attach($role_worker);


        // User Database Seeder

        \App\User::create([
            'location_id' => 1,
            'name' => 'User',
            'email' => 'user@email.com',
            'password' => bcrypt('secret')
        ])->roles()->attach($role_user);

        \App\User::create([
            'location_id' => 2,
            'name' => 'User 1',
            'email' => 'user1@email.com',
            'password' => bcrypt('secret')
        ])->roles()->attach($role_user);

        \App\User::create([
            'location_id' => 3,
            'name' => 'User 2',
            'email' => 'user2@email.com',
            'password' => bcrypt('secret')
        ])->roles()->attach($role_user);


    }
}
