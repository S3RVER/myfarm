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
                'oc_less_than_1'       => 14,
                'oc_between_1_and_2'   => 14,
                'oc_more_than_2'       => 14,

                'oc_less_than_1_bio'       => 14,
                'oc_between_1_and_2_bio'   => 14,
                'oc_more_than_2_bio'       => 14,

                'p_less_than_5'         => 0,
                'p_between_5_and_10'    => 0,
                'p_between_10_and_15'   => 0,

                'k_less_than_150'       => 0,
                'k_between_150_and_250' => 0,
                'k_between_250_and_300' => 0,
            ],
            [
                'tree_age'          => 2,
                'oc_less_than_1'       => 30,
                'oc_between_1_and_2'   => 30,
                'oc_more_than_2'       => 30,

                'oc_less_than_1_bio'       => 30,
                'oc_between_1_and_2_bio'   => 30,
                'oc_more_than_2_bio'       => 30,
            ],
            [
                'tree_age'          => 3,
                'oc_less_than_1'       => 40,
                'oc_between_1_and_2'   => 40,
                'oc_more_than_2'       => 40,

                'oc_less_than_1_bio'       => 40,
                'oc_between_1_and_2_bio'   => 40,
                'oc_more_than_2_bio'       => 40,
            ],
            [
                'tree_age'          => 4,
                'oc_less_than_1'       => 60,
                'oc_between_1_and_2'   => 55,
                'oc_more_than_2'       => 50,

                'oc_less_than_1_bio'       => 45,
                'oc_between_1_and_2_bio'   => 40,
                'oc_more_than_2_bio'       => 35,
            ],
            [
                'tree_age'          => 5,
                'oc_less_than_1'       => 70,
                'oc_between_1_and_2'   => 65,
                'oc_more_than_2'       => 50,

                'oc_less_than_1_bio'       => 49,
                'oc_between_1_and_2_bio'   => 47,
                'oc_more_than_2_bio'       => 45,
            ],
            [
                'tree_age'          => 6,
                'oc_less_than_1'       => 80,
                'oc_between_1_and_2'   => 75,
                'oc_more_than_2'       => 70,

                'oc_less_than_1_bio'       => 56,
                'oc_between_1_and_2_bio'   => 52,
                'oc_more_than_2_bio'       => 49,
            ],
            [
                'tree_age'          => 7,
                'oc_less_than_1'       => 90,
                'oc_between_1_and_2'   => 85,
                'oc_more_than_2'       => 80,

                'oc_less_than_1_bio'       => 63,
                'oc_between_1_and_2_bio'   => 58,
                'oc_more_than_2_bio'       => 56,
            ],
            [
                'tree_age'          => 8,
                'oc_less_than_1'       => 100,
                'oc_between_1_and_2'   => 95,
                'oc_more_than_2'       => 90,

                'oc_less_than_1_bio'       => 70,
                'oc_between_1_and_2_bio'   => 67,
                'oc_more_than_2_bio'       => 63,
            ],
            [
                'tree_age'          => 9,
                'oc_less_than_1'       => 110,
                'oc_between_1_and_2'   => 105,
                'oc_more_than_2'       => 100,

                'oc_less_than_1_bio'       => 77,
                'oc_between_1_and_2_bio'   => 74,
                'oc_more_than_2_bio'       => 70,
            ],
            [
                'tree_age'          => 10,
                'oc_less_than_1'       => 120,
                'oc_between_1_and_2'   => 115,
                'oc_more_than_2'       => 110,

                'oc_less_than_1_bio'       => 84,
                'oc_between_1_and_2_bio'   => 81,
                'oc_more_than_2_bio'       => 77,
            ],
            [
                'tree_age'          => 11,
                'oc_less_than_1'       => 140,
                'oc_between_1_and_2'   => 130,
                'oc_more_than_2'       => 120,

                'oc_less_than_1_bio'       => 98,
                'oc_between_1_and_2_bio'   => 91,
                'oc_more_than_2_bio'       => 84,
            ],
        ];
        \App\Citrus_nitrogen_fertilizer::insert($insert);
    }
}
