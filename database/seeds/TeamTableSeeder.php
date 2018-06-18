<?php

use Illuminate\Database\Seeder;

class TeamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$tableName = 'teams';

    	DB::table($tableName)->insert([
            'name' => "Team 1",
            'league_id' => 1
        ]);

        DB::table($tableName)->insert([
            'name' => "Team 2",
            'league_id' => 1
        ]);

        
    }
}
