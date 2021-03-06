<?php

use Illuminate\Database\Seeder;

class CitrusRecommendationSeeder extends Seeder
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
                "nitrogen_less_than_1" => 14,
                "nitrogen_between_1_and_2" => 14,
                "nitrogen_more_than_2" => 14,
                "nitrogen_less_than_1_bio" => 10,
                "nitrogen_between_1_and_2_bio" => 10,
                "nitrogen_more_than_2_bio" => 10,
                "phosphorus_less_than_5" => 10,
                "phosphorus_between_5_and_10" => 5,
                "phosphorus_between_10_and_15" => 3,
                "phosphorus_less_than_5_bio" => 8,
                "phosphorus_between_5_and_10_bio" => 5,
                "phosphorus_between_10_and_15_bio" => 3,
                "potash_less_than_150" => 10,
                "potash_between_150_and_250" => 8,
                "potash_between_250_and_300" => 5,
                "potash_less_than_150_bio" => 8,
                "potash_between_150_and_250_bio" => 6,
                "potash_between_250_and_300_bio" => 3,
                "tree_age" => 1,
            ],
            [
                "nitrogen_less_than_1" => 30,
                "nitrogen_between_1_and_2" => 30,
                "nitrogen_more_than_2" => 30,
                "nitrogen_less_than_1_bio" => 20,
                "nitrogen_between_1_and_2_bio" => 20,
                "nitrogen_more_than_2_bio" => 20,
                "phosphorus_less_than_5" => 16,
                "phosphorus_between_5_and_10" => 10,
                "phosphorus_between_10_and_15" => 8,
                "phosphorus_less_than_5_bio" => 10,
                "phosphorus_between_5_and_10_bio" => 7,
                "phosphorus_between_10_and_15_bio" => 6,
                "potash_less_than_150" => 20,
                "potash_between_150_and_250" => 15,
                "potash_between_250_and_300" => 10,
                "potash_less_than_150_bio" => 15,
                "potash_between_150_and_250_bio" => 10,
                "potash_between_250_and_300_bio" => 8,
                "tree_age" => 2,
            ],
            [
                "nitrogen_less_than_1" => 40,
                "nitrogen_between_1_and_2" => 40,
                "nitrogen_more_than_2" => 40,
                "nitrogen_less_than_1_bio" => 30,
                "nitrogen_between_1_and_2_bio" => 30,
                "nitrogen_more_than_2_bio" => 30,
                "phosphorus_less_than_5" => 20,
                "phosphorus_between_5_and_10" => 14,
                "phosphorus_between_10_and_15" => 10,
                "phosphorus_less_than_5_bio" => 13,
                "phosphorus_between_5_and_10_bio" => 10,
                "phosphorus_between_10_and_15_bio" => 7,
                "potash_less_than_150" => 30,
                "potash_between_150_and_250" => 20,
                "potash_between_250_and_300" => 15,
                "potash_less_than_150_bio" => 20,
                "potash_between_150_and_250_bio" => 15,
                "potash_between_250_and_300_bio" => 10,
                "tree_age" => 3,
            ],
            [
                "nitrogen_less_than_1" => 60,
                "nitrogen_between_1_and_2" => 55,
                "nitrogen_more_than_2" => 50,
                "nitrogen_less_than_1_bio" => 45,
                "nitrogen_between_1_and_2_bio" => 40,
                "nitrogen_more_than_2_bio" => 35,
                "phosphorus_less_than_5" => 30,
                "phosphorus_between_5_and_10" => 20,
                "phosphorus_between_10_and_15" => 12,
                "phosphorus_less_than_5_bio" => 20,
                "phosphorus_between_5_and_10_bio" => 13,
                "phosphorus_between_10_and_15_bio" => 8,
                "potash_less_than_150" => 40,
                "potash_between_150_and_250" => 30,
                "potash_between_250_and_300" => 20,
                "potash_less_than_150_bio" => 27,
                "potash_between_150_and_250_bio" => 20,
                "potash_between_250_and_300_bio" => 15,
                "tree_age" => 4,
            ],
            [
                "nitrogen_less_than_1" => 70,
                "nitrogen_between_1_and_2" => 65,
                "nitrogen_more_than_2" => 60,
                "nitrogen_less_than_1_bio" => 49,
                "nitrogen_between_1_and_2_bio" => 47,
                "nitrogen_more_than_2_bio" => 45,
                "phosphorus_less_than_5" => 36,
                "phosphorus_between_5_and_10" => 26,
                "phosphorus_between_10_and_15" => 14,
                "phosphorus_less_than_5_bio" => 22,
                "phosphorus_between_5_and_10_bio" => 17,
                "phosphorus_between_10_and_15_bio" => 9,
                "potash_less_than_150" => 50,
                "potash_between_150_and_250" => 40,
                "potash_between_250_and_300" => 24,
                "potash_less_than_150_bio" => 35,
                "potash_between_150_and_250_bio" => 27,
                "potash_between_250_and_300_bio" => 16,
                "tree_age" => 5,
            ],
            [
                "nitrogen_less_than_1" => 80,
                "nitrogen_between_1_and_2" => 75,
                "nitrogen_more_than_2" => 70,
                "nitrogen_less_than_1_bio" => 56,
                "nitrogen_between_1_and_2_bio" => 52,
                "nitrogen_more_than_2_bio" => 49,
                "phosphorus_less_than_5" => 40,
                "phosphorus_between_5_and_10" => 30,
                "phosphorus_between_10_and_15" => 18,
                "phosphorus_less_than_5_bio" => 28,
                "phosphorus_between_5_and_10_bio" => 20,
                "phosphorus_between_10_and_15_bio" => 12,
                "potash_less_than_150" => 60,
                "potash_between_150_and_250" => 50,
                "potash_between_250_and_300" => 30,
                "potash_less_than_150_bio" => 40,
                "potash_between_150_and_250_bio" => 35,
                "potash_between_250_and_300_bio" => 20,
                "tree_age" => 6,
            ],
            [
                "nitrogen_less_than_1" => 90,
                "nitrogen_between_1_and_2" => 85,
                "nitrogen_more_than_2" => 80,
                "nitrogen_less_than_1_bio" => 63,
                "nitrogen_between_1_and_2_bio" => 58,
                "nitrogen_more_than_2_bio" => 56,
                "phosphorus_less_than_5" => 46,
                "phosphorus_between_5_and_10" => 34,
                "phosphorus_between_10_and_15" => 20,
                "phosphorus_less_than_5_bio" => 30,
                "phosphorus_between_5_and_10_bio" => 22,
                "phosphorus_between_10_and_15_bio" => 13,
                "potash_less_than_150" => 80,
                "potash_between_150_and_250" => 60,
                "potash_between_250_and_300" => 35,
                "potash_less_than_150_bio" => 60,
                "potash_between_150_and_250_bio" => 40,
                "potash_between_250_and_300_bio" => 22,
                "tree_age" => 7,
            ],
            [
                "nitrogen_less_than_1" => 100,
                "nitrogen_between_1_and_2" => 95,
                "nitrogen_more_than_2" => 90,
                "nitrogen_less_than_1_bio" => 70,
                "nitrogen_between_1_and_2_bio" => 67,
                "nitrogen_more_than_2_bio" => 63,
                "phosphorus_less_than_5" => 50,
                "phosphorus_between_5_and_10" => 40,
                "phosphorus_between_10_and_15" => 24,
                "phosphorus_less_than_5_bio" => 32,
                "phosphorus_between_5_and_10_bio" => 28,
                "phosphorus_between_10_and_15_bio" => 16,
                "potash_less_than_150" => 90,
                "potash_between_150_and_250" => 70,
                "potash_between_250_and_300" => 40,
                "potash_less_than_150_bio" => 60,
                "potash_between_150_and_250_bio" => 45,
                "potash_between_250_and_300_bio" => 27,
                "tree_age" => 8,
            ],
            [
                "nitrogen_less_than_1" => 110,
                "nitrogen_between_1_and_2" => 105,
                "nitrogen_more_than_2" => 100,
                "nitrogen_less_than_1_bio" => 77,
                "nitrogen_between_1_and_2_bio" => 74,
                "nitrogen_more_than_2_bio" => 70,
                "phosphorus_less_than_5" => 56,
                "phosphorus_between_5_and_10" => 40,
                "phosphorus_between_10_and_15" => 26,
                "phosphorus_less_than_5_bio" => 37,
                "phosphorus_between_5_and_10_bio" => 28,
                "phosphorus_between_10_and_15_bio" => 17,
                "potash_less_than_150" => 100,
                "potash_between_150_and_250" => 70,
                "potash_between_250_and_300" => 50,
                "potash_less_than_150_bio" => 70,
                "potash_between_150_and_250_bio" => 45,
                "potash_between_250_and_300_bio" => 35,
                "tree_age" => 9,
            ],
            [
                "nitrogen_less_than_1" => 120,
                "nitrogen_between_1_and_2" => 115,
                "nitrogen_more_than_2" => 110,
                "nitrogen_less_than_1_bio" => 84,
                "nitrogen_between_1_and_2_bio" => 81,
                "nitrogen_more_than_2_bio" => 77,
                "phosphorus_less_than_5" => 60,
                "phosphorus_between_5_and_10" => 46,
                "phosphorus_between_10_and_15" => 30,
                "phosphorus_less_than_5_bio" => 40,
                "phosphorus_between_5_and_10_bio" => 31,
                "phosphorus_between_10_and_15_bio" => 20,
                "potash_less_than_150" => 120,
                "potash_between_150_and_250" => 80,
                "potash_between_250_and_300" => 55,
                "potash_less_than_150_bio" => 80,
                "potash_between_150_and_250_bio" => 60,
                "potash_between_250_and_300_bio" => 35,
                "tree_age" => 10,
            ],
            [
                "nitrogen_less_than_1" => 140,
                "nitrogen_between_1_and_2" => 130,
                "nitrogen_more_than_2" => 120,
                "nitrogen_less_than_1_bio" => 98,
                "nitrogen_between_1_and_2_bio" => 91,
                "nitrogen_more_than_2_bio" => 84,
                "phosphorus_less_than_5" => 66,
                "phosphorus_between_5_and_10" => 50,
                "phosphorus_between_10_and_15" => 34,
                "phosphorus_less_than_5_bio" => 44,
                "phosphorus_between_5_and_10_bio" => 35,
                "phosphorus_between_10_and_15_bio" => 22,
                "potash_less_than_150" => 140,
                "potash_between_150_and_250" => 90,
                "potash_between_250_and_300" => 60,
                "potash_less_than_150_bio" => 95,
                "potash_between_150_and_250_bio" => 60,
                "potash_between_250_and_300_bio" => 40,
                "tree_age" => 11,
            ],
        ];
        \App\Citrus_recommendation::insert($insert);
    }
}
