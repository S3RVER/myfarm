<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder{

    public function run(){
        \App\Role::query()->truncate();
        $system_default_roles = [
            [
                'title' => 'مدیریت',
                'system_default' => true
            ],
            [
                'title' => 'مشاور',
                'system_default' => true
            ],
            [
                'title' => 'کشاورز',
                'system_default' => true
            ],
        ];
        \App\Role::insert($system_default_roles);
    }
}
