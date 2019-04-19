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
        DB::table('users')->insert([
            'name' => 'Carlos Eduardo',
            'email' => 'carlos1@gmail.com1',
            'password' => bcrypt('123456'),
        ]);    }
}
