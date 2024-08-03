<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cellphone;

class CellphoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cellphone::create(['brand' => 'Apple', 'model' => 'iPhone 14 Pro Max', 'units_sold' => 26500000]);
        Cellphone::create(['brand' => 'Samsung', 'model' => 'iPhone 14 Pro', 'units_sold' => 21000000]);
        Cellphone::create(['brand' => 'Apple', 'model' => 'iPhone 14', 'units_sold' => 16500000]);
        Cellphone::create(['brand' => 'Apple', 'model' => 'iPhone 13', 'units_sold' => 15500000]);
        Cellphone::create(['brand' => 'Samsung', 'model' => 'Samsung Galaxy A14', 'units_sold' => 12400000]);
        Cellphone::create(['brand' => 'Samsung', 'model' => 'Samsung Galaxy S23 Ultra', 'units_sold' => 9600000]);
        Cellphone::create(['brand' => 'Samsung', 'model' => 'Samsung Galaxy A14 5G', 'units_sold' => 9000000]);
        Cellphone::create(['brand' => 'Samsung', 'model' => 'Samsung Galaxy A54 5G', 'units_sold' => 8800000]);
        Cellphone::create(['brand' => 'Samsung', 'model' => 'Samsung Galaxy A34 5G', 'units_sold' => 7100000]);
        Cellphone::create(['brand' => 'Apple', 'model' => 'iPhone 11', 'units_sold' => 6900000]);
    }
}
