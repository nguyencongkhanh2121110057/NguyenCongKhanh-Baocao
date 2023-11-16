<?php

namespace Database\Seeders;
use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class ContactSeeder extends Seeder
{private $faker;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->faker=Faker::create();
        for ($i = 1; $i <= 10; $i++) {
            Contact::create([
                'user_id' => 1,
                'name' => 'Lien he ' . $i,
                'email' => $this->faker->unique()->email,
                'phone' => 0111111111,
                'title'=>'hoi',
                'content'=>1,
                'replay_id'=>1,
                'created_at' => date('Y-m-d H:i:s'),
                'created_by' => '1',
                'updated_at' => date('Y-m-d H:i:s'),
                'updated_by' => '1',
                'status' => '1'
            ]);
        }
    }
}
