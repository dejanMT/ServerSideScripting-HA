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

    public function create(){
        $car = new Car();
        $manufactors = Manufacturer::orderBy('name')->pluck('name', 'id');
        return view('cars.create', compact('manufactors', 'car'));
    }
           
    public function store(Request $request)
    {

        $errorMessages = [
            'model.required' => 'The car model is required.',
            'year.required' => 'The year model is required.',
            'salesperson_email.required' => 'Please specidy email.',
            'manufacturer_id.required' => 'Please select a manufacturer.'
        ];

        $request->validate([
            'model' => 'required',
            'year' => 'required|integer|digits:4|',
            'salesperson_email' => 'required|email',
            'manufacturer_id' => 'required|exists:manufacturers,id'
        ],  $errorMessages);
    
    
        Car::create($request->all());
        return redirect()->route('cars.index')->with('message', 'Car has been added successfully');
    }

    public function edit($id)
    {
        $car = Car::find($id);
        $manufactors = Manufacturer::orderBy('name')->pluck('name', 'id');
        return view('cars.edit', compact('manufactors', 'car'));
    }

    public function update($id, Request $request)
    {
        $errorMessages = [
            'model.required' => 'The car model is required.',
            'year.required' => 'The year model is required.',
            'salesperson_email.required' => 'Please specidy email.',
            'manufacturer_id.required' => 'Please select a manufacturer.'
        ];

        $request->validate([
            'model' => 'required',
            'year' => 'required|integer|digits:4|',
            'salesperson_email' => 'required|email',
            'manufacturer_id' => 'required|exists:manufacturers,id'
        ],  $errorMessages);


        $car = Car::find($id);
        $car->update($request->all());

        return redirect()->route('cars.index')->with('message', 'The car has been updated successfully');
    }

}