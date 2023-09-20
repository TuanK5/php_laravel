<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data=[
            [
                'product_name'=>'iPhone X',
                'product_slug'=>str::slug('iPhone X'),  
                'product_price'=>8000000,
                'product_img'=>'images.jpg',
                'product_warranty'=>'Bao test 7 ngày đổi trả, bảo hành 3 – 12 tháng',
                'product_accessories'=>'Sac, cap',
                'product_condition'=>'99%',
                'product_promotion'=>'Dan Cuong Luc',
                'product_status'=>1,
                'product_description'=>'<p>hang moi bao doi tra</p>',
                'product_cate'=>1,
            ],
        ];
        DB::table('vp_products')->insert($data);
    }
}
