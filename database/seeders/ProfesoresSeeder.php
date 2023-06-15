<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ProfesoresSeeder extends Seeder
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
                'codprofesor' => '33',
                'nomprofesor' => 'Francisco Salazar',
                'catprofesor' =>'que es'
            ],
            [
                'codprofesor' => '12',
                'nomprofesor' => 'Diego Mejia',
                'catprofesor' =>'que es'
            ],
            [
                'codprofesor' => '22',
                'nomprofesor' => 'Sandra Vallejo',
                'catprofesor' =>'que es'
            ]
        ];
        DB::table('profesores')->insert($datos);
    }
}
