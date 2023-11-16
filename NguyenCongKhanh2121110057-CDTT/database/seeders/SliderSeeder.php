<?php

namespace Database\Seeders;
use App\Models\Slider;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i=1;$i<=10;$i++){
            Slider::insert([
                'name' =>  'silder'.$i,
                'link'=>1,
                'sort_order' => 1,
                'position'=>1,
                'created_by' => 1,
                'updated_by' => 3,
                'created_at' => now(),
                'updated_at' => now(),
                'status'=>1
            ]);
        }
    }
}
