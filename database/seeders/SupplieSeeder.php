<?php

namespace Database\Seeders;

use App\Models\Supplie;
use Illuminate\Database\Seeder;

class SupplieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $supplie=Supplie::create([
            'name'=>'masa-pequeña',
            'price'=>'7.0',
            'description'=>'masa de 250g',
            'amount'=>'10',
        ]);
        $supplie=Supplie::create([
            'name'=>'masa-mediana',
            'price'=>'14.0',
            'description'=>'masa de 500g',
            'amount'=>'10',
        ]);
        $supplie=Supplie::create([
            'name'=>'masa-grande',
            'price'=>'28.0',
            'description'=>'masa de 1kg',
            'amount'=>'10',
        ]);
        $supplie=Supplie::create([
            'name'=>'salsa-tomate',
            'price'=>'3.5',
            'description'=>'salsa de 140g',
            'amount'=>'10',
        ]);
        $supplie=Supplie::create([
            'name'=>'jamon',
            'price'=>'14',
            'description'=>'jamon de 250g',
            'amount'=>'10',
        ]);
        $supplie=Supplie::create([
            'name'=>'queso',
            'price'=>'31.5',
            'description'=>'queso de 1kg',
            'amount'=>'10',
        ]);
        $supplie=Supplie::create([
            'name'=>'leche',
            'price'=>'6.5',
            'description'=>'leche de 1L',
            'amount'=>'10',
        ]);
        $supplie=Supplie::create([
            'name'=>'fruta',
            'price'=>'8.5',
            'description'=>'fruta de 1kg',
            'amount'=>'10',
        ]);
        $supplie=Supplie::create([
            'name'=>'soda',
            'price'=>'10.0',
            'description'=>'soda de 3L',
            'amount'=>'10',
        ]);
        $supplie=Supplie::create([
            'name'=>'empanada',
            'price'=>'5.0',
            'description'=>'empanada especial',
            'amount'=>'10',
        ]);
        $supplie=Supplie::create([
            'name'=>'cafe',
            'price'=>'30.0',
            'description'=>'cafe de 200g',
            'amount'=>'10',
        ]);
        $supplie=Supplie::create([
            'name'=>'te',
            'price'=>'28.0',
            'description'=>'te de 130U',
            'amount'=>'10',
        ]);
    }
}
