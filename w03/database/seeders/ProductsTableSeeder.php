<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    public function run()
    {
        // เพิ่มข้อมูลในตาราง products
        DB::table('products')->insert([
            [
                'product_name' => 'Smart TV',
                'product_desc' => 'High-definition Smart TV',
                'product_image' => 'tv.jpg',
                'category_id' => 1,
                'brand_id' => 3,
            ],
            [
                'product_name' => 'Running Shoes',
                'product_desc' => 'Comfortable running shoes',
                'product_image' => 'shoes.jpg',
                'category_id' => 2,
                'brand_id' => 2,
            ],
            [
                'product_name' => 'Smart TV',
                'product_desc' => 'High-definition Smart TV',
                'product_image' => 'tv.jpg',
                'category_id' => 1,
                'brand_id' => 3,
            ],
            [
                'product_name' => 'Running Shoes',
                'product_desc' => 'Comfortable running shoes',
                'product_image' => 'shoes.jpg',
                'category_id' => 2,
                'brand_id' => 2,
            ],
            [
                'product_name' => 'Smart TV',
                'product_desc' => 'High-definition Smart TV',
                'product_image' => 'tv.jpg',
                'category_id' => 1,
                'brand_id' => 3,
            ],
            [
                'product_name' => 'Running Shoes',
                'product_desc' => 'Comfortable running shoes',
                'product_image' => 'shoes.jpg',
                'category_id' => 2,
                'brand_id' => 2,
            ],
            [
                'product_name' => 'Smart TV',
                'product_desc' => 'High-definition Smart TV',
                'product_image' => 'tv.jpg',
                'category_id' => 1,
                'brand_id' => 3,
            ],
            [
                'product_name' => 'Running Shoes',
                'product_desc' => 'Comfortable running shoes',
                'product_image' => 'shoes.jpg',
                'category_id' => 2,
                'brand_id' => 2,
            ],
            // เพิ่มข้อมูลอื่น ๆ ตามต้องการ
        ]);
    }
}
