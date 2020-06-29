<?php

use Illuminate\Database\Seeder;

class RoleUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        \App\Role_users::query()->truncate();
        $insert_data = [
            [
                'user_id' => 1,
                'role_id' => 1
            ]
        ];
        \App\Role_users::insert($insert_data);
    }
}
