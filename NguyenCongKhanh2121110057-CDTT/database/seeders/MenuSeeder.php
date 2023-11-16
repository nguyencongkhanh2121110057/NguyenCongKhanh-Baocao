<?php

namespace Database\Seeders;
use App\Models\Menu;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i=1;$i<=10;$i++){
            Menu::insert([
                'name' =>  'menu '.$i,
                'link'=>1,
                'type'=>1,
                'table_id'=>1,
                'created_by' => 1,
                'updated_by' => 3,
                'created_at' => now(),
                'updated_at' => now(),
                'status'=>1
            ]);
        }
    }
}
