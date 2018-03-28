<?php

use Illuminate\Database\Seeder;

class DepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Department::create([
            'title' => 'Plumber',
            'details' => 'Some quick example text to build on the card title and',
            'thumbnail' => 'plumber.jpg'
        ]);

        \App\Department::create([
            'title' => 'Electrician',
            'details' => 'Some quick example text to build on the card title and',
            'thumbnail' => 'electrician.jpg'
        ]);

        \App\Department::create([
            'title' => 'Carpenter',
            'details' => 'Some quick example text to build on the card title and',
            'thumbnail' => 'carpenter.jpp'
        ]);

        \App\Department::create([
            'title' => 'Mechanic',
            'details' => 'Some quick example text to build on the card title and',
            'thumbnail' => 'mechanic.jpg'
        ]);

        \App\Department::create([
            'title' => 'Painter',
            'details' => 'Some quick example text to build on the card title and',
            'thumbnail' => 'painter.jpg'
        ]);
    }
}
