<?php

use Illuminate\Database\Seeder;

class PlayerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$tableName = 'players';

        DB::table($tableName)->insert([
            'name' => "Moe Smith",
            'email' => str_random(10).'@gmail.com',
            'phone' => '4404404444'
        ]);

        DB::table($tableName)->insert([
            'name' => "Curly Smith",
            'email' => str_random(10).'@gmail.com',
            'phone' => '4404404444'
        ]);

        DB::table($tableName)->insert([
            'name' => "Larry Smith",
            'email' => str_random(10).'@gmail.com',
            'phone' => '4404404444'
        ]);

        DB::table($tableName)->insert([
            'name' => "Bill Gates",
            'email' => str_random(10).'@gmail.com',
            'phone' => '4404404444'
        ]);

        DB::table($tableName)->insert([ 
            'name' => "Alex Taylor",      // Not on any teams rip
            'email' => str_random(10).'@gmail.com',
            'phone' => '4404404444'
        ]);

        // Now sign some people up for teams

        $tableName = 'player_team';

        DB::table($tableName)->insert([
            'player_id' => 1,
            'team_id' => 1
        ]);

        DB::table($tableName)->insert([
            'player_id' => 2,
            'team_id' => 1
        ]);

        DB::table($tableName)->insert([
            'player_id' => 3,
            'team_id' => 1
        ]);

        DB::table($tableName)->insert([
            'player_id' => 4,
            'team_id' => 2
        ]);

        DB::table($tableName)->insert([
            'player_id' => 1,
            'team_id' => 2
        ]);
    }
}
