<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CiudadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datos =[
            [
                'codciudad' => '10000',
                'nomciudad' => 'Pasto',
                'departamento' =>'80'
            ],
            [
                'codciudad' => '20000',
                'nomciudad' => 'Cali',
                'departamento' =>'81'
            ],
            [
                'codciudad' => '30000',
                'nomciudad' => 'Medellin',
                'departamento' =>'82'
            ]
        ];
        DB::table('ciudades')->insert($datos);
    }
}
