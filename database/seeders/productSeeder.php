<?php
namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = [
            [
                'name' => 'car',
                'description' => ' is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy',
                'purchase_price' => '4554',
                'price' => '45',
                'bulk_price' => '232',
                'unit_stock' => '22',
                'stock' => '44',
                'image' => 'image',
                'instock' => '1',
                'barcode' => '5443',
                'manufacturer' => 'ben joe',
                'supplier' => 'chika',
                'active' => '1'
            ],
            [
                'name' => 'sweet',
                'description' => ' is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy',
                'purchase_price' => '34',
                'price' => '45',
                'bulk_price' => '232',
                'unit_stock' => '22',
                'stock' => '44',
                'image' => 'image',
                'instock' => '1',
                'barcode' => '5443',
                'manufacturer' => 'ben joe',
                'supplier' => 'chika',
                'active' => '1'

            ]
        ];
        foreach ($product as $key => $value) {
            Product::create($value);
        }
    }
}
