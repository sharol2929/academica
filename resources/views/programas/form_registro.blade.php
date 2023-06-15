@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Facultades</h1>


@stop

@section('content')
<h1>Registro de Facultades</h1>
    <form action= "{{url('programas/registrar')}}" method= "POST" >
        @csrf
        <div class="mb-3">
            <label for="codigoPrograma" class="form-label">Código</label>
            <input type="text" class="form-control" id="codigoPrograma" name="codigoPrograma" placeholder="Ingrese el código">
        </div>

        <div class="mb-3">
            <label for="nombrePrograma" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombrePrograma" name="nombrePrograma" placeholder="Ingrese el nombre">
        </div>

        <div class="mb-3">
            <label for="codigoFacultad" class="form-label">Facultad</label>
            <input type="text" class="form-control" id="codigoFacultad" name="codigoFacultad" placeholder="Ingrese el código">
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
