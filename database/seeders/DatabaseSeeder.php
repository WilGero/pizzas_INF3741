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
            'price'=>'7,00',
            'description'=>'masa de pan de pizza pizzapan 265g',
        ]);
        $supplie=Supplie::create([
            'name'=>'salsa de tomate',
            'price'=>'2,00',
            'description'=>'salsa de tomate caxamarka 80g',
        ]);
        $supplie=Supplie::create([
            'name'=>'jamon',
            'price'=>'4,00',
            'description'=>'jamon ingles 50g',
        ]);
        $supplie=Supplie::create([
            'name'=>'queso',
            'price'=>'5,00',
            'description'=>'queso flor de leche 50g',
        ]);
        $supplie=Supplie::create([
            'name'=>'leche',
            'price'=>'2,00',
            'description'=>'leche pil 125ml',
        ]);
        $supplie=Supplie::create([
            'name'=>'fruta',
            'price'=>'1,00',
            'description'=>'fruta de 100g',
        ]);



        $product=Product::create([
            'name'=>'pizza',
            'price'=>'40,00',
            'description'=>'pizza de 365g',
        ]);
        $product=Product::create([
            'name'=>'refresco natural',
            'price'=>'5,00',
            'description'=>'refresco de fruta de 225ml',
        ]);
        $product=Product::create([
            'name'=>'refresco soda',
            'price'=>'4,00',
            'description'=>'refresco de soda de 500ml',
        ]);
        $product=Product::create([
            'name'=>'empanada',
            'price'=>'4,00',
            'description'=>'empanada de queso',
        ]);
        $product=Product::create([
            'name'=>'cafe',
            'price'=>'3,00',
            'description'=>'empanada de queso',
        ]);
        $product=Product::create([
            'name'=>'te',
            'price'=>'3,00',
            'description'=>'empanada de queso',
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
