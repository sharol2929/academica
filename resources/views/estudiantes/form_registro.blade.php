@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Estudiantes</h1>


@stop

@section('content')
<h1>Registro de Estudiantes</h1>
    <form action= "{{url('estudiantes/registrar')}}" method= "POST" >
        @csrf
        <div class="mb-3">
            <label for="codigoEst" class="form-label">Código</label>
            <input type="text" class="form-control" id="codigoEst" name="codigoEst" placeholder="Ingrese el código">
        </div>

        <div class="mb-3">
            <label for="nombreEst" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombreEst" name="nombreEst" placeholder="Ingrese el nombre">
        </div>

        <div class="mb-3">
            <label for="edadEst" class="form-label">edad</label>
            <input type="number" class="form-control" id="edadEst" name="edadEst" placeholder="Ingrese la edad">
        </div>

        <div class="mb-3">
            <label for="fechaEst" class="form-label">fecha</label>
            <input type="date" class="form-control" id="fechaEst" name="fechaEst" placeholder="Ingrese el fecha">
        </div>

        <div class="mb-3">
            <label for="sexEst" class="form-label">sexo</label>
            <input type="text" class="form-control" id="sexEst" name="sexEst" placeholder="Ingrese el sexo">
        </div>

        <div class="mb-3">
            <label for="ciudadEst" class="form-label">ciudad</label>
            <input type="text" class="form-control" id="ciudadEst" name="ciudadEst" placeholder="Ingrese el ciudad">
        </div>

        <div class="mb-3">
            <label for="barrioEst" class="form-label">barrio</label>
            <input type="text" class="form-control" id="barrioEst" name="barrioEst" placeholder="Ingrese el barrio">
        </div>

        <div class="mb-3">
            <label for="proEst" class="form-label">programa</label>
            <input type="text" class="form-control" id="proEst" name="proEst" placeholder="Ingrese el programa">
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
