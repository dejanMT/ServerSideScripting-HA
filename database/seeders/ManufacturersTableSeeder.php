<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Manufacturer; 

class ManufacturersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $manufacturers = [
            [
                'name' => 'Toyota Motor Corporation ', 
                'address' => 'HQ, Kyoto District, Tokyo, Japan', 
                'phone' => '+1 800 233 8232'
            ],
            [
                'name' => 'BMW Group', 
                'address' => 'HQ, Bavaria State, Berlin, Germany', 
                'phone' => '+12 234 8552 923'
            ],
        ];

        foreach ($manufacturers as $manufacturer) {
            Manufacturer::create($manufacturer);
        }
    }
}
