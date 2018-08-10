<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tableName = 'roles';

        DB::table($tableName)->insert([
            'id' => '1',
            'name' => 'user'
        ]);

        DB::table($tableName)->insert([
            'id' => '2',
            'name' => 'admin'
        ]);
    }
}
