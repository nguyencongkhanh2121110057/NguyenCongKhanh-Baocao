<?php

namespace Database\Seeders;
use App\Models\Product;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i=1;$i<=10;$i++){
            Product::insert([
                'category_id'=>1,
                'brand_id'=>1,
                'price'=>1,
                'price_sale'=>1,
                'qty'=>1,
                'detail'=>'aaa',
                'name' =>  'product '.$i,
                'image' =>  'hinhanh.jpg',
                'slug' => 'tan',
                'metakey' => 'acaca',
                'metadesc' => 'acac',
                'created_by' => 1,
                'updated_by' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
   
    }
}
