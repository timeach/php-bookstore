<?php

use Illuminate\Database\Seeder;

class CarTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $car = new \App\Car(['name'=>'car1','price'=>11111, 'supplier_id'=>1]);
        $car->save();
        $car = new \App\Car(['name'=>'car2','price'=>22222, 'supplier_id'=>1]);
        $car->save();
        $car = new \App\Car(['name'=>'car3','price'=>33333, 'supplier_id'=>2]);
        $car->save();
        $car = new \App\Car(['name'=>'car4','price'=>44444, 'supplier_id'=>2]);
        $car->save();
        $car = new \App\Car(['name'=>'car1','price'=>55555, 'supplier_id'=>3]);
        $car->save();
    }
}
