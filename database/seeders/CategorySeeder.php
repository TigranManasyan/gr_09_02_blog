<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i <= 60; $i++) {
            DB::table("categories")->insert(
                [
                    'name' => "CategoryOld N: $i"
                ]
            );
        }
    }
}
