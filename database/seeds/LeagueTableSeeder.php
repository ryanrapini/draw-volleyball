<?php

use Illuminate\Database\Seeder;

class LeagueTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tableName = 'leagues';

        DB::table($tableName)->insert([
            'name' => 'League 1',
            'description' => 'Just an example league',
            'level' => 'A',
            'player_count' => 2
        ]);
    }
}
