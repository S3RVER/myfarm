<?php

use Illuminate\Database\Seeder;

class AbilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        \App\Ability::query()->truncate();
        $abilities = [
            // ******************************
            [
                'title' => 'نمایش لیست کاربران',
                'group' => 'کاربران',
                'name' => 'users.index',
                'main_abilities' => false
            ],
            [
                'title' => 'اضافه کردن کاربر',
                'group' => 'کاربران',
                'name' => 'users.create',
                'main_abilities' => false
            ],
            [
                'title' => 'اضافه کردن کاربر',
                'group' => 'کاربران',
                'name' => 'users.store',
                'main_abilities' => ['users.create']
            ],
            [
                'title' => 'ویرایش کردن کاربر',
                'group' => 'کاربران',
                'name' => 'users.edit',
                'main_abilities' => false
            ],
            [
                'title' => 'ویرایش کردن کاربر',
                'group' => 'کاربران',
                'name' => 'users.update',
                'main_abilities' => ['users.edit']
            ],
            [
                'title' => 'حذف کردن کاربر',
                'group' => 'کاربران',
                'name' => 'users.destroy',
                'main_abilities' => false
            ],
             //******************************
            [
                'title' => 'نمایش لیست نقش ها',
                'group' => 'نقش ها',
                'name' => 'rbac.index',
                'main_abilities' => false
            ],
            [
                'title' => 'اضافه کردن نقش',
                'group' => 'نقش ها',
                'name' => 'rbac.create',
                'main_abilities' => false
            ],
            [
                'title' => 'اضافه کردن نقش',
                'group' => 'نقش ها',
                'name' => 'rbac.store',
                'main_abilities' => ['rbac.create']
            ],
            [
                'title' => 'نمایش نقش',
                'group' => 'نقش ها',
                'name' => 'rbac.show',
                'main_abilities' => false
            ],
            [
                'title' => 'ویرایش کردن نقش',
                'group' => 'نقش ها',
                'name' => 'rbac.edit',
                'main_abilities' => false
            ],
            [
                'title' => 'ویرایش کردن نقش',
                'group' => 'نقش ها',
                'name' => 'rbac.update',
                'main_abilities' => ['rbac.edit']
            ],
            [
                'title' => 'حذف کردن نقش',
                'group' => 'نقش ها',
                'name' => 'rbac.destroy',
                'main_abilities' => false
            ],
            //******************************
            [
                'title' => 'انتساب کاربر به نقش مدیریت',
                'group' => 'کاربران',
                'name' => 'users.set_role.admin',
                'main_abilities' => false
            ],
            [
                'title' => 'انتساب کاربر به نقش های سفارشی',
                'group' => 'کاربران',
                'name' => 'user.set_role.custom',
                'main_abilities' => false
            ],
        ];

        $abilities_insert = [];
        foreach ($abilities as $key => $value) {
            $sub_ability = (!empty($value['main_abilities'])) ? true : false;
            $abilities_insert[] = [
                'title' => $value['title'],
                'group' => $value['group'],
                'name' => $value['name'],
                'sub_ability' => $sub_ability,
            ];
        }
        \App\Ability::insert($abilities_insert);


        $sub_abilities_names = [];
        $main_abilities_names = [];
        foreach ($abilities as $key => $value) {
            if (!empty($value['main_abilities'])){
                foreach ($value['main_abilities'] as $_value) {
                    $main_abilities_names[] = $_value;
                }
                $sub_abilities_names[] = $value['name'];
            }
        }
        $sub_abilities = \App\Ability::whereIn('name', $sub_abilities_names)->get();
        $main_abilities = \App\Ability::whereIn('name', $main_abilities_names)->get();


        $final = [];
        foreach ($abilities as $key => $value) {
            foreach ($sub_abilities as $_key => $_value) {
                foreach ($main_abilities as $__key => $__value) {
                    if ($_value->name == $value['name'] && in_array($__value->name, $value['main_abilities'])) {
                        $final[] = [
                            'role_id' => $_value->id,
                            'dependent_to_role_id' => $__value->id
                        ];
                    }
                }
            }
        }
        \App\Role_dependency::query()->truncate()->insert($final);


        \App\Role_ability::query()->truncate();
        $x = [];
        foreach (\App\Ability::all() as $key => $value) {
            $x[] = ['role_id' => 1, 'ability_id' => $value->id];
        }
        \App\Role_ability::insert($x);
    }
}
