<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 1)->create([
            'email' => 'admin@example.com',
            'role' => 2
        ]);

        factory(App\User::class, 1)->create([
            'email' => 'user@example.com'
        ]);
        
        factory(App\User::class, 4)->create();
    }
}
