<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class EstudiantesSeeder extends Seeder
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
                'codestudiante' => '1000',
                'nomestudiante' => 'Francisco Salazar',
                'edadestudiante' =>'24',
                'fechestudiante' => '1999/02/24',
                'sexestudiante' => 'M',
                'ciudad' => '10000',
                'barrio' => '100',
                'programa' => '31'

            ],
            [
                'codestudiante' => '2000',
                'nomestudiante' => 'Diego Mejia',
                'edadestudiante' =>'22',
                'fechestudiante' => '2001/06/24',
                'sexestudiante' => 'M',
                'ciudad' => '20000',
                'barrio' => '200',
                'programa' => '21'
            ],
            [
                'codestudiante' => '3000',
                'nomestudiante' => 'Sandra Vallejo',
                'edadestudiante' =>'20',
                'fechestudiante' => '2003/11/03',
                'sexestudiante' => 'F',
                'ciudad' => '30000',
                'barrio' => '300',
                'programa' => '31'
            ]
        ];
        DB::table('estudiantes')->insert($datos);
    }
}
