<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class cliente2 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clientes')->insert([
            'nombre' => 'Paula Andrea Taborda Montes',
            'correo' => 'ptabordam@unal.edu.co',
            'telefono' => '3145957752',
            'direccion' => 'Crr 45 #22 - 02',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
