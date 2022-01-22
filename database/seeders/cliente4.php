<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class cliente4 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clientes')->insert([
            'nombre' => 'Alex Orlando Muñoz Ramos',
            'correo' => 'almunozr@gmail.com',
            'telefono' => '3134562734',
            'direccion' => 'Crr 34 #21-45',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
