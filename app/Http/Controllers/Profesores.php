<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Models\ProfesorModel;

class Profesores extends Controller
{
    //
    public function index(){
        $profesor = DB::table('profesores')->get();
        return view('profesores.listado',['profesor'=>$profesor]);
    }

    public function form_registro(){
        return view('profesores.form_registro');
    }

    public function registrar(Request $r){
        $profesor = new ProfesorModel();
        $profesor->codprofesor = $r->input('codigoprofesor');
        $profesor->nomprofesor = $r->input('nombreprofesor');
        $profesor->catprofesor = $r->input('catprofesor');
        $profesor->save();
        return redirect()->route('listadoProfe');
    } 

    public function eliminar($id){
        $profesor = ProfesorModel::findOrFail($id);
        $profesor->delete();
        return redirect()->route('listadoProfe');
    }
}
