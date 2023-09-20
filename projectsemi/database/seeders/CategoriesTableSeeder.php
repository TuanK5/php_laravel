<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data=[
            [
                'cate_name'=>'iPhone',
                'cate_slug'=>str::slug('iPhone')  
            ],
            [
                'cate_name'=>'Samsung',
                'cate_slug'=>str::slug('Samsung')
            ],
        ];
        DB::table('vp_categories')->insert($data);
    }
}
