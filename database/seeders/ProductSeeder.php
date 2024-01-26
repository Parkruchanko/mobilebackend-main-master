<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'product_name'=>'iphine 15',
                'product_type'=> 1,
                'price'=>60,
                'created_at'=> Carbon::now(),
            ],[
                'product_name'=>'samsong 30',
                'product_type'=> 1,
                'price'=>70,
                'created_at'=> Carbon::now(),
            ],[
                'product_name'=>'LG Smart TV',
                'product_type'=> 1,
                'price'=>680,
                'created_at'=> Carbon::now(),
            ],[
                'product_name'=>'Apple TV',
                'product_type'=> 1,
                'price'=>90,
                'created_at'=> Carbon::now(),
            ],
        ]);
    }
}
