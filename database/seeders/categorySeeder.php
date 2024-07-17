<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class categorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            ['name'=> 'Phòng Khách', 'order' => 1],
            ['name' => 'Phòng Ngủ','order' => 2,],
            ['name' => 'Phòng Ăn', 'order' => 3],
            ['name'=> 'Phòng Làm Việc','order' => 4],
            ['name'=> 'Tủ Bếp','order' => 5],
            ['name' => 'Combo','order' => 6],
        ]);
    }
}
