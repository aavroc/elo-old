<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'firstname' => $faker->firstName,
        'prefix' => "",
        'lastname' => $faker->lastName,
        'studentnr' => $faker->numberBetween($min = 00000, $max = 99999),
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'role' => 3,
        'github_nickname' => $faker->userName,
        'github_email' => $faker->unique()->safeEmail,
        'classroom' => $faker->randomElement($array = array('LCTAOO9A','LCTAOO9C','LCTAOO9D')),
        'status_id' => $faker->numberBetween($min = 1, $max = 2),
        'email_verified_at' => now(),
        'remember_token' => Str::random(10),
        
    ];
});
