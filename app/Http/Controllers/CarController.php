<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Manufacturer;

class CarController extends Controller
{
    public function index(){
        $manufactors = Manufacturer::orderBy('name')->pluck('name', 'id')->prepend('All Manufactors', '');
        if (request('manufacturer_id') == null) {
            $cars = Car::all();
        } else {
            $cars = Car::where('manufacturer_id', request('manufacturer_id'))->get();
        }
   
        return view('cars.index', compact('cars', 'manufactors'));
    }
   
    public function show($id){
        $car = Car::find($id);
        return view('cars.show', compact('car'));
    }

}