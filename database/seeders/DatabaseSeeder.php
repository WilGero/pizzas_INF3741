<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Supplie;
use App\Models\Product;
use App\Models\Customer;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    
    public function run()
    {   
        $user=User::create([
            'name'=>'admin',
            'email'=>'admin@gmail.com',
            'password'=>Hash::make('admin123'),
            'role'=>'supervisor',
            'type'=>'administración',
            'photo'=>'ninguna',
        ]);
        $user=User::create([
            'name'=>'member',
            'email'=>'member@gmail.com',
            'password'=>Hash::make('member123'),
            'role'=>'mesero',
            'type'=>'miembro',
            'photo'=>'ninguna',
        ]);

        
      
        $supplie=Supplie::create([
            'name'=>'masa de pizza',
            'price'=>'7.5',
            'description'=>'masa de pizza',
        ]);
        $supplie=Supplie::create([
            'name'=>'salsa de tomate',
            'price'=>'2.5',
            'description'=>'salsa de tomate',
        ]);
        $supplie=Supplie::create([
            'name'=>'jamon',
            'price'=>'4.5',
            'description'=>'jamon',
        ]);
        $supplie=Supplie::create([
            'name'=>'queso',
            'price'=>'5.5',
            'description'=>'queso',
        ]);
        $supplie=Supplie::create([
            'name'=>'leche',
            'price'=>'2.5',
            'description'=>'leche',
        ]);
        $supplie=Supplie::create([
            'name'=>'fruta',
            'price'=>'1.5',
            'description'=>'fruta',
        ]);
        $supplie=Supplie::create([
            'name'=>'soda',
            'price'=>'4.0',
            'description'=>'soda',
        ]);
        $supplie=Supplie::create([
            'name'=>'empanada',
            'price'=>'4.0',
            'description'=>'empanada',
        ]);
        $supplie=Supplie::create([
            'name'=>'cafe',
            'price'=>'3.0',
            'description'=>'cafe',
        ]);
        $supplie=Supplie::create([
            'name'=>'te',
            'price'=>'3.0',
            'description'=>'te',
        ]);



        $product=Product::create([
            'name'=>'pizza',
            'price'=>'40.5',
            'description'=>'pizza',
        ]);
        $product=Product::create([
            'name'=>'refresco natural',
            'price'=>'5.5',
            'description'=>'refresco natural',
        ]);
        $product=Product::create([
            'name'=>'soda',
            'price'=>'4.5',
            'description'=>'soda',
        ]);
        $product=Product::create([
            'name'=>'empanada',
            'price'=>'4.5',
            'description'=>'empanada',
        ]);
        $product=Product::create([
            'name'=>'cafe',
            'price'=>'3.5',
            'description'=>'cafe',
        ]);
        $product=Product::create([
            'name'=>'te',
            'price'=>'3.5',
            'description'=>'te',
        ]);

         

        $customer=Customer::create([
            'ci'=>'2624096',
            'name'=>'maximo mamani velazquez',
            'phone'=>'ninguno',
            'direction'=>'ninguna',
        ]);
        $customer=Customer::create([
            'ci'=>'10661604',
            'name'=>'milton paniagua leon',
            'phone'=>'ninguno',
            'direction'=>'ninguna',
        ]);
        $customer=Customer::create([
            'ci'=>'332460',
            'name'=>'zenon villca flores',
            'phone'=>'ninguno',
            'direction'=>'ninguna',
        ]);
        $customer=Customer::create([
            'ci'=>'2112652',
            'name'=>'eva maria menacho reque',
            'phone'=>'ninguno',
            'direction'=>'ninguna',
        ]);
        $customer=Customer::create([
            'ci'=>'2428827',
            'name'=>'evelia yucra asillo',
            'phone'=>'ninguno',
            'direction'=>'ninguna',
        ]);




    }
}
