@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Profosores</h1>


@stop

@section('content')
<h1>Registro de Profesores</h1>
    <form action= "{{url('profesores/registrar')}}" method= "POST" >
        @csrf
        <div class="mb-3">
            <label for="codigoprofesor" class="form-label">Código</label>
            <input type="text" class="form-control" id="codigoprofesor" name="codigoprofesor" placeholder="Ingrese el código">
        </div>

        <div class="mb-3">
            <label for="nombreprofesor" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombreprofesor" name="nombreprofesor" placeholder="Ingrese el nombre">
        </div>

        <div class="mb-3">
            <label for="catprofesor" class="form-label">catprofesor</label>
            <input type="text" class="form-control" id="catprofesor" name="catprofesor" placeholder="catprofesor">
        </div>

        <button type="submit" class="btn btn-success">Registrar</button>
    </form>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
