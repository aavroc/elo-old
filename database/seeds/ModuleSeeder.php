<?php

use Illuminate\Database\Seeder;

class ModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $modules = [
            [
                'name' => 'PHP Basic',
                'slug' => 'php-basic',
            ],
            [
                'name' => 'PHP Advanced',
                'slug' => 'php-advanced',
            ],
            [
                'name' => 'PHP Expert',
                'slug' => 'php-expert',
            ],
            [
                'name' => 'MySQL BASIC',
                'slug' => 'mysql-basic',
            ],
            [
                'name' => 'MySQL Advanced',
                'slug' => 'mysql-advanced',
            ],
            [
                'name' => 'Database Design',
                'slug' => 'database-design',
            ],

        ];

        foreach ($modules as $value) {

            DB::table('modules')->insert([
                $value
            ]);
        }

        $module_flow = [
            [
                'module_id'  => 2,
                'pre_module' => 1
            ],

            [
                'module_id'  => 3,
                'pre_module' => 2
            ],
            [
                'module_id'  => 5,
                'pre_module' => 4
            ],
        ];

        foreach ($module_flow as $value) {

            DB::table('modules_prereq')->insert([
                $value
            ]);
        }
    }
}
