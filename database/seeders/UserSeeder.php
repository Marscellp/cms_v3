<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        
        //
        User::create([
            'name' => 'Marcelo',
            'apellido' => 'Poma',
            'cedula' => '123456',
            'edad' => '25',
            'especialidad' => 'sistemas',
            'semestre' => '8',
            'uc' => '12',
            'email' => 'marcelo@gmail.com',
            'password' => bcrypt('lenny'),
            'type' => 'ADMIN',
        ]);
        
    }
}
