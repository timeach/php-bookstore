<?php

namespace App\Http\Controllers;

use App\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::all();
        return view('Cars.index', compact('cars'));
    }
    public function Create()
    {
        return view('Cars.Create');
    }
    public function CreatePost(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'price' => 'max:10',
            'name' => 'required|max:50',
            'supplier_id' => 'max:10'
        ]);
        if ($validator->fails()) {
            return redirect('Cars/Create')
                ->withErrors($validator)
                ->withInput();
        }

        $car = new Car([
            'price' => $_POST['price'],
            'name' => $_POST['name'],
            'supplier_id' => $_POST['supplier_id']
        ]);
        $car->save();
        return redirect('Cars');
    }

}
