<?php

use Illuminate\Database\Seeder;

class CitrusRecommandationSeeder extends Seeder
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

                'p_less_than_5'         => 10,
                'p_between_5_and_10'    => 5,
                'p_between_10_and_15'   => 3,

                'k_less_than_150'       => 50,
                'k_between_150_and_250' => 40,
                'k_between_250_and_300' => 5
            ],
            [
                'tree_age'          => 2,
                'oc_less_than_1'       => 30,
                'oc_between_1_and_2'   => 30,
                'oc_more_than_2'       => 30,

                'oc_less_than_1_bio'       => 30,
                'oc_between_1_and_2_bio'   => 30,
                'oc_more_than_2_bio'       => 30,

                'p_less_than_5'         => 16,
                'p_between_5_and_10'    => 10,
                'p_between_10_and_15'   => 8,

                'k_less_than_150'       => 100,
                'k_between_150_and_250' => 75,
                'k_between_250_and_300' => 50
            ],
            [
                'tree_age'          => 3,
                'oc_less_than_1'       => 40,
                'oc_between_1_and_2'   => 40,
                'oc_more_than_2'       => 40,

                'oc_less_than_1_bio'       => 40,
                'oc_between_1_and_2_bio'   => 40,
                'oc_more_than_2_bio'       => 40,

                'p_less_than_5'         => 20,
                'p_between_5_and_10'    => 14,
                'p_between_10_and_15'   => 10,

                'k_less_than_150'       => 150,
                'k_between_150_and_250' => 100,
                'k_between_250_and_300' => 75,
            ],
            [
                'tree_age'          => 4,
                'oc_less_than_1'       => 60,
                'oc_between_1_and_2'   => 55,
                'oc_more_than_2'       => 50,

                'oc_less_than_1_bio'       => 45,
                'oc_between_1_and_2_bio'   => 40,
                'oc_more_than_2_bio'       => 35,

                'p_less_than_5'         => 30,
                'p_between_5_and_10'    => 20,
                'p_between_10_and_15'   => 12,

                'k_less_than_150'       => 200,
                'k_between_150_and_250' => 150,
                'k_between_250_and_300' => 100,
            ],
            [
                'tree_age'          => 5,
                'oc_less_than_1'       => 70,
                'oc_between_1_and_2'   => 65,
                'oc_more_than_2'       => 60,

                'oc_less_than_1_bio'       => 49,
                'oc_between_1_and_2_bio'   => 47,
                'oc_more_than_2_bio'       => 45,

                'p_less_than_5'         => 36,
                'p_between_5_and_10'    => 26,
                'p_between_10_and_15'   => 14,

                'k_less_than_150'       => 250,
                'k_between_150_and_250' => 200,
                'k_between_250_and_300' => 120,
            ],
            [
                'tree_age'          => 6,
                'oc_less_than_1'       => 80,
                'oc_between_1_and_2'   => 75,
                'oc_more_than_2'       => 70,

                'oc_less_than_1_bio'       => 56,
                'oc_between_1_and_2_bio'   => 52,
                'oc_more_than_2_bio'       => 49,

                'p_less_than_5'         => 40,
                'p_between_5_and_10'    => 30,
                'p_between_10_and_15'   => 18,

                'k_less_than_150'       => 300,
                'k_between_150_and_250' => 250,
                'k_between_250_and_300' => 150,
            ],
            [
                'tree_age'          => 7,
                'oc_less_than_1'       => 90,
                'oc_between_1_and_2'   => 85,
                'oc_more_than_2'       => 80,

                'oc_less_than_1_bio'       => 63,
                'oc_between_1_and_2_bio'   => 58,
                'oc_more_than_2_bio'       => 56,

                'p_less_than_5'         => 46,
                'p_between_5_and_10'    => 34,
                'p_between_10_and_15'   => 20,

                'k_less_than_150'       => 400,
                'k_between_150_and_250' => 300,
                'k_between_250_and_300' => 175,
            ],
            [
                'tree_age'          => 8,
                'oc_less_than_1'       => 100,
                'oc_between_1_and_2'   => 95,
                'oc_more_than_2'       => 90,

                'oc_less_than_1_bio'       => 70,
                'oc_between_1_and_2_bio'   => 67,
                'oc_more_than_2_bio'       => 63,

                'p_less_than_5'         => 50,
                'p_between_5_and_10'    => 40,
                'p_between_10_and_15'   => 24,

                'k_less_than_150'       => 450,
                'k_between_150_and_250' => 350,
                'k_between_250_and_300' => 200,
            ],
            [
                'tree_age'          => 9,
                'oc_less_than_1'       => 110,
                'oc_between_1_and_2'   => 105,
                'oc_more_than_2'       => 100,

                'oc_less_than_1_bio'       => 77,
                'oc_between_1_and_2_bio'   => 74,
                'oc_more_than_2_bio'       => 70,

                'p_less_than_5'         => 56,
                'p_between_5_and_10'    => 40,
                'p_between_10_and_15'   => 26,

                'k_less_than_150'       => 500,
                'k_between_150_and_250' => 350,
                'k_between_250_and_300' => 250,
            ],
            [
                'tree_age'          => 10,
                'oc_less_than_1'       => 120,
                'oc_between_1_and_2'   => 115,
                'oc_more_than_2'       => 110,

                'oc_less_than_1_bio'       => 84,
                'oc_between_1_and_2_bio'   => 81,
                'oc_more_than_2_bio'       => 77,

                'p_less_than_5'         => 60,
                'p_between_5_and_10'    => 46,
                'p_between_10_and_15'   => 30,

                'k_less_than_150'       => 600,
                'k_between_150_and_250' => 400,
                'k_between_250_and_300' => 275,
            ],
            [
                'tree_age'          => 11,
                'oc_less_than_1'       => 140,
                'oc_between_1_and_2'   => 130,
                'oc_more_than_2'       => 120,

                'oc_less_than_1_bio'       => 98,
                'oc_between_1_and_2_bio'   => 91,
                'oc_more_than_2_bio'       => 84,

                'p_less_than_5'         => 66,
                'p_between_5_and_10'    => 50,
                'p_between_10_and_15'   => 34,

                'k_less_than_150'       => 700,
                'k_between_150_and_250' => 450,
                'k_between_250_and_300' => 300,
            ],
        ];
        \App\Citrus_recommandation::insert($insert);
    }
}
