<?php

use App\Product;
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
        Product::create([
            'product_name' => 'sepatu nike',
            'id_category' => '1',
            'product_deskription' => 'sepatu asli original dan termurah',
            'product_stock' => '10',
            'product_price' => '150000',
            'product_image' => 'spatunike.jpg',
        ]);
        Product::create([
            'product_name' => 'sepatu adidas',
            'id_category' => '1',
            'product_deskription' => 'sepatu asli original dan termurah',
            'product_stock' => '10',
            'product_price' => '200000',
            'product_image' => 'spatuadidas.jpg',
        ]);
    }
}
