<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class BarriosSeeder extends Seeder
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
                'codbarrio' => '100',
                'nombarrio' => 'Santiago',
                'estbarrio' =>'1',
                'comuna' => '1'
            ],
            [
                'codbarrio' => '200',
                'nombarrio' => 'mañana',
                'estbarrio' =>'2',
                'comuna' => '2'
            ],
            [
                'codbarrio' => '300',
                'nombarrio' => 'vista al cielo',
                'estbarrio' =>'3',
                'comuna' => '3'
            ]
        ];
        DB::table('barrios')->insert($datos);
    }
}
