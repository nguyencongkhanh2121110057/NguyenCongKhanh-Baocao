<?php

namespace Database\Seeders;
use App\Models\Category;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        for($i=1;$i<=10;$i++){
            Category::create([
                'name'=>'Tên'. $i,
                'slug'=>'danh muc'. $i,
                'image'=>'hinhanh.jpg',
                'parent_id'=>0,
                'sort_order'=>1,
                'metadesc'=>'mô tả'.$i,
                'metakey'=>'đường dẫn'.$i,
                'created_at'=>date('Y-m-d H:i:s'),
                'created_by'=>'1',
                'updated_at'=>date('Y-m-d H:i:s'),
                'updated_by'=>'1',
                'status'=>'1'
            ]);
        }
    }
}
