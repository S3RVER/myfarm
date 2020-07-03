<?php

use Illuminate\Database\Seeder;

class CitrusNitrogenFertilizerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $insert = [
            [
                'tree_age'          => 1,
                'less_than_1'       => 14,
                'between_1_and_2'   => 14,
                'more_than_2'       => 14
            ],
            [
                'tree_age'          => 2,
                'less_than_1'       => 30,
                'between_1_and_2'   => 30,
                'more_than_2'       => 30
            ],
            [
                'tree_age'          => 3,
                'less_than_1'       => 40,
                'between_1_and_2'   => 40,
                'more_than_2'       => 40
            ],
            [
                'tree_age'          => 4,
                'less_than_1'       => 60,
                'between_1_and_2'   => 55,
                'more_than_2'       => 50
            ],
            [
                'tree_age'          => 5,
                'less_than_1'       => 70,
                'between_1_and_2'   => 65,
                'more_than_2'       => 50
            ],
            [
                'tree_age'          => 6,
                'less_than_1'       => 80,
                'between_1_and_2'   => 75,
                'more_than_2'       => 70
            ],
            [
                'tree_age'          => 7,
                'less_than_1'       => 90,
                'between_1_and_2'   => 85,
                'more_than_2'       => 80
            ],
            [
                'tree_age'          => 8,
                'less_than_1'       => 100,
                'between_1_and_2'   => 95,
                'more_than_2'       => 90
            ],
            [
                'tree_age'          => 9,
                'less_than_1'       => 110,
                'between_1_and_2'   => 105,
                'more_than_2'       => 100
            ],
            [
                'tree_age'          => 10,
                'less_than_1'       => 120,
                'between_1_and_2'   => 115,
                'more_than_2'       => 110
            ],
            [
                'tree_age'          => 11,
                'less_than_1'       => 140,
                'between_1_and_2'   => 130,
                'more_than_2'       => 120
            ],
        ];
        \App\Citrus_nitrogen_fertilizer::insert($insert);
    }
}
