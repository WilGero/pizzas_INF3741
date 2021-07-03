<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        $user=User::create([
            'name'=>'supervisor',
            'email'=>'supervisor@gmail.com',
            'password'=>Hash::make('admin123'),
            'role'=>'supervisor',
            'type'=>'administrador',
            'photo'=>'none',
        ]);
        $user=User::create([
            'name'=>'mesero',
            'email'=>'mesero@gmail.com',
            'password'=>Hash::make('member123'),
            'role'=>'mesero',
            'type'=>'miembro',
            'photo'=>'none',
        ]);
        $user=User::create([
            'name'=>'elaborador',
            'email'=>'elaborador@gmail.com',
            'password'=>Hash::make('member123'),
            'role'=>'elaborador',
            'type'=>'miembro',
            'photo'=>'none',
        ]);
        $user=User::create([
            'name'=>'cajero',
            'email'=>'cajero@gmail.com',
            'password'=>Hash::make('member123'),
            'role'=>'cajero',
            'type'=>'miembro',
            'photo'=>'none',
        ]);
    }
}
