<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DeptoSeeder extends Seeder
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
                'coddepto' => '80',
                'nomdepto' => 'Nariño',
            ],
            [
                'coddepto' => '81',
                'nomdepto' => 'Valle del cauca',
            ],
            [
                'coddepto' => '82',
                'nomdepto' => 'Antioquia',
            ]
        ];
        DB::table('departamentos')->insert($datos);
    }
}
