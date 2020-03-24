<?php

use Illuminate\Database\Seeder;

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
                'firstname' => 'Amba',
                'lastname' => 'Amba',
                'email' => 'amba@amba.com',
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
    }
}
