<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuario=User::create([
            'name'=>'Joselito',
            'surname'=>'Corre Ysalta',
            'username'=>'user',
            'email'=>'admin@mail.com',
            'password'=>Hash::make('asdfghjklñ'),
            'role'=>'limpieza',
            'type'=>'member',
        ]);
    }
}