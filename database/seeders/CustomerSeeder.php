<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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
