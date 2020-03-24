<?php

use Illuminate\Database\Seeder;

class ClassroomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $classrooms = [
            [
                'name' => 'LCTAOO9A',
            ],
            [
                'name' => 'LCTAOO9C',
            ],
            [
                'name' => 'LCTAOO9D',
            ],

        ];

        foreach ($classrooms as $value) {

            DB::table('classrooms')->insert([
                $value
            ]);
        }
    }
}
