<?php

use Illuminate\Database\Seeder;

class ChallengeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $challenges = [
            [
                'name' => 'challenge1',
            ],
            [
                'name' => 'challenge2',
            ],

        ];

        foreach ($challenges as $value) {

            DB::table('challenges')->insert([
                $value
            ]);
        }
    }
}
