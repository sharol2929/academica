<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\EstudianteModel;

class Estudiantes extends Controller
{
    public function index(){
        $estudiante = DB::table('estudiantes')->get();
        return view('estudiantes.listado', ['estudiante'=>$estudiante]);
    }

    public function form_registro(){
        return view('estudiantes.form_registro');
    }

    public function registrar(Request $r){
        $estudiante = new EstudianteModel();
        $estudiante->codestudiante = $r->input('codigoEst');
        $estudiante->nomestudiante = $r->input('nombreEst');
        $estudiante->edadestudiante = $r->input('edadEst');
        $estudiante->fechestudiante = $r->input('fechaEst');
        $estudiante->sexestudiante = $r->input('sexEst');
        $estudiante->ciudad = $r->input('ciudadEst');
        $estudiante->barrio = $r->input('barrioEst');
        $estudiante->programa = $r->input('proEst');
        $estudiante->save();
        return redirect()->route('listadoEst');
    }

    public function eliminar($id){
        $estudiante = EstudianteModel::findOrFail($id);
        $estudiante->delete();
        return redirect()->route('listadoEst');
    }
}
