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
        $this->call(
            [
                ClassroomSeeder::class,
                ModuleSeeder::class,
                UserSeeder::class,
                TaskSeeder::class,
                TagsSeeder::class,
            ]
        );
    }
}
