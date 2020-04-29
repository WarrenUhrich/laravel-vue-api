<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Instance of Factory.
        $faker = Factory::create();

        // Create users!
        foreach ( range( 1, 25 ) as $index ) {
            $user = new User;
            $user->name = $faker->name;
            $user->email = $faker->email;
            $user->password = '';
            $user->save();
        }
    }
}
