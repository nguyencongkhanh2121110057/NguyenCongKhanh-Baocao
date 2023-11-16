<?php

namespace Database\Seeders;
use App\Models\Category;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i=1;$i<=10;$i++){
            Category::insert([
                'id'=>1,
                'topic_id'=>1,
                'title'=>1,
                'detail'=>1,
                'type'=>1,
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
