<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ProgramasSeeder extends Seeder
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
                'codPrograma' => '11',
                'nomPrograma' => 'Música',
                'facultad' =>'10'
            ],
            [
                'codPrograma' => '21',
                'nomPrograma' => 'Ingeniería de Sistemas',
                'facultad' =>'20'
            ],
            [
                'codPrograma' => '31',
                'nomPrograma' => 'Promosión de la Salud',
                'facultad' =>'30'
            ]
        ];
        DB::table('programas')->insert($datos);
    }
}
