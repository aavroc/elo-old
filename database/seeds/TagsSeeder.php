<?php

use Illuminate\Database\Seeder;

class TagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = [
           [ 'name' => 'variables',],
           [ 'name' => 'arrays',],
           [ 'name' => 'functions',],
           [ 'name' => 'assoc arrays',],
           [ 'name' => 'index arrays',],
           [ 'name' => 'parameters',],
           [ 'name' => 'include',],

        ];

        foreach ($tags as $value) {

            DB::table('tags')->insert([
                $value
            ]);
        }

    }
}
