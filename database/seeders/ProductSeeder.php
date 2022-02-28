<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            array('proname' => 'Mens Sweatpants'),
            array('desc' => 'Cotton and Polyester'),
            array('price'=> '250LE'),
        ]);
        DB::table('products')->insert([
            array('proname' => 'anes Womens Sport Cool '),
            array('desc' => 'Cotton,Polyester'),
            array('price'=> '250LE'),
        ]);
        DB::table('products')->insert([
            array('proname' => 'adidas Diablo Small Duffel Bag'),
            array('desc' => 'Polyester,Lifetime warranty.'),
            array('price'=> '400LE'),
        ]);
        DB::table('products')->insert([
            array('proname' => 'Travel Duffel Bag, Sports Tote Gym Bag for women'),
            array('desc' => '80% The high density water resistant material'),
            array('price'=> '600LE'),
        ]);
        DB::table('products')->insert([
            array('proname' => 'Girls Fashion Backpack Mini Backpack Purse for Women'),
            array('desc' => 'We use the artifical(PU) for this bag, soft, comfortable, safe'),
            array('price'=> '750'),
        ]);
        DB::table('products')->insert([
            array('proname' => 'PinkSheep Little Girl Jewel Rings '),
            array('desc' => 'Original And Trendy Designs of 24 rings '),
            array('price'=> '700LE'),
        ]);
    }
}
