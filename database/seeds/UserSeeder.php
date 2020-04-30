<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'firstname' => 'David',
                'lastname' => 'David',
                'email' => 'david@david.com',
                'password' => bcrypt('welcome01'),
                'role' => 1,
                'status_id' => 1,
            ],
            [
                'firstname' => 'Raymond',
                'lastname' => 'Raymond',
                'email' => 'raymond@raymond.com',
                'password' => bcrypt('welcome01'),
                'role' => 2,
                'status_id' => 1,
            ],
            [
                'firstname' => 'Jesse',
                'lastname' => 'Jesse',
                'email' => 'jesse@jesse.com',
                'password' => bcrypt('welcome01'),
                'role' => 3,
                'classroom' => 'LCTAOO9A',
                'status_id' => 1,
            ],
            [
                'firstname' => 'Willem',
                'lastname' => 'van Oranje',
                'email' => 'willem@oranje.com',
                'password' => bcrypt('welcome01'),
                'role' => 3,
                'classroom' => 'LCTAOO9C',
                'status_id' => 1,
            ],

        ];

        foreach ($users as $value) {

            DB::table('users')->insert([
                $value
            ]);
        }


        DB::table('users_modules')->insert([
            'user_id' => 4,
            'module_id' => 1,
        ]);

        //Add random users for testing
        if (app()->environment() !== 'production'){
            factory(App\User::class, 10)->create();
        }




    }
}
