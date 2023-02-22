<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $product = new \App\Models\Product([
        'name' => 'Product1',
        'details' => 'detailzz'
       ]);

       $product->save();

       $product = new \App\Models\Product([
        'name' => 'Product2',
        'details' => 'detailzz2'
       ]);

       $product->save();

       $product = new \App\Models\Product([
        'name' => 'Product3',
        'details' => 'detailzz3'
       ]);

       $product->save();
    }
}
