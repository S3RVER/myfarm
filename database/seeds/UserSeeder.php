<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){

        \App\User::query()->truncate()->create([
            'mobile' => '09123517072',
            'password' => bcrypt('123'),
        ]);
    }
}
