<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Mobile;

class MobileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Mobile::create([
            'name' => 'Samsung Galaxy S21',
            'brand' => 'Samsung',
            'description' => 'Samsung Galaxy S21 5G 128GB Phantom Gray',
            'price' => 999,
        ]);
        
        Mobile::create([
            'name' => 'iPhone 12',
            'brand' => 'Apple',
            'description' => 'Apple iPhone 12 64GB Black',
            'price' => 799,
        ]);
        Mobile::create([
            'name' => 'OnePlus 9',
            'brand' => 'OnePlus',
            'description' => 'OnePlus 9 5G 128GB Winter Mist',
            'price' => 729,
        ]);

    }
}
