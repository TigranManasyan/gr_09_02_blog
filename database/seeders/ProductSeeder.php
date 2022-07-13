<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i <= 100; $i++) {
            DB::table("products")->insert(
                [
                    'name' => "Product N: $i",
                    'qt' => rand(1,100),
                    'price' => 1000,
                    'category_id' => rand(1, 60),
                    'user_id' => 1,
                    'created_at' => now(),
                    'updated_at' => now()
                ]
            );
        }
    }
}
