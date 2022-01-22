<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class cliente3 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clientes')->insert([
            'nombre' => 'Julián Pachón Castrillón',
            'correo' => 'julian506@yahoo.es',
            'telefono' => '3124672436',
            'direccion' => 'Crr 32 #21-45',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
