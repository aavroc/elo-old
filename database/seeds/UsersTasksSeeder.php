<?php

use Illuminate\Database\Seeder;
// use Faker\Generator as Faker;
use Faker\Factory;
use App\User;
use App\Task;

class UsersTasksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Factory::create();
        for ($i=0; $i < 20; $i++) {
            DB::table('users_tasks')->insert(
                [
                    'user_id' =>  \App\User::inRandomOrder()->first()->id, //User::find(rand(1,10)->id), //$faker->numberBetween($min = 1, $max = 10),
                    'task_id' =>  \App\Task::inRandomOrder()->first()->id, //Task::find(rand(1,60)->id), //$faker->numberBetween($min = 1, $max = 60),
                    'evaluation' => $faker->numberBetween($min = 0, $max = 1),
                    'remarks' => $faker->text($maxNbChars = 100),
                    'created_at' => $faker->dateTimeBetween($startDate = '-14 days', $endDate = 'now', $timezone = null),
                    'updated_at' => $faker->dateTimeBetween($startDate = '-7 days', $endDate = 'now', $timezone = null),
                ]
                );
        }
    }
}
