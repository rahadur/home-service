<?php

use Illuminate\Database\Seeder;
use App\Location;

class LocationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Location::create([
          'name' => 'Dhaka',
          'description' => 'Capital of Bangladesh'
        ]);

        Location::create([
          'name' => 'Narayanganj',
          'description' => ''
        ]);

        Location::create([
          'name' => 'Gazipur',
          'description' => ''
        ]);

        Location::create([
          'name' => 'Faridpur',
          'description' => ''
        ]);


        Location::create([
          'name' => 'Tangail',
          'description' => ''
        ]);
    }
}
