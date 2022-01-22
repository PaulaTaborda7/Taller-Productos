<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class cliente1 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clientes')->insert([
            'nombre' => 'Mariana Rodríguez Osorio',
            'correo' => 'mariana563@gmail.com',
            'telefono' => '3124572391',
            'direccion' => 'Crr 45 #21-45',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
