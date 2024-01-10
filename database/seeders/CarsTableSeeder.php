<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Car; 

class CarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cars = [
            [
                'model' => 'Camry',
                'year' => '2010',
                'salesperson_email' => 'joe@carozza.com',
                'manufacturer_id' => 1 
            ],
            [
                'model' => 'Hilux',
                'year' => '2020',
                'salesperson_email' => 'mary@carozza.com ',
                'manufacturer_id' => 1
            ],
            [
                'model' => 'Model 2',
                'year' => '2021',
                'salesperson_email' => 'joe@carozza.com',
                'manufacturer_id' => 2
            ]
 
        ];

        foreach ($cars as $car) {
            Car::create($car);
        }
    }
}
