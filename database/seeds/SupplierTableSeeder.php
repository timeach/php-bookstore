<?php

use Illuminate\Database\Seeder;

class SupplierTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $supplier=new \App\Supplier(['address'=>'aaa111', 'name'=>'Supplier1']);
        $supplier->save();
        $supplier=new \App\Supplier(['address'=>'bbb222', 'name'=>'Supplier2']);
        $supplier->save();
        $supplier=new \App\Supplier(['address'=>'ccc333', 'name'=>'Supplier3']);
        $supplier->save();
    }
}
