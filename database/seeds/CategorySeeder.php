<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $attributes = [
            'title' => 'سوالات متداول',
            'system' => true
        ];
        \App\Category::create($attributes);

        $attributes = [
            'title' => 'توصیه های عمومی',
            'system' => true
        ];
        \App\Category::create($attributes);


        $attributes = [
            'title' => 'محصولات باغی',
            'parent_id' => 2,
            'system' => true
        ];
        \App\Category::create($attributes);

        $attributes = [
            'title' => 'محصولات زراعی',
            'parent_id' => 2,
            'system' => true
        ];
        \App\Category::create($attributes);

        $attributes = [
            'title' => 'بیماری ها',
            'system' => true
        ];
        \App\Category::create($attributes);
    }
}
