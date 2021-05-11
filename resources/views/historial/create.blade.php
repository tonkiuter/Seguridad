@extends('layout2')

@section('title', 'Crear Alunmo')

@section('content')
    
    <h1>Crear Nuevo Alumno</h1>

<form method="POST" action="{{ route('historial.store') }}">
        
    @csrf
        <label>
            CodigoReporte:
            <input type="text" name= 'CodigoReporte'>
        </label>
        
        <br>
        <br>

        <label>
            CodigoAlumno:
            <input type="text" name= 'CodigoAlumno'> 
        </label>
        
        <br>
        <br>
        
        <label>
            CodigoHistorial:
            <input type="text" name= 'CodigoHistorial'> 
        </label>
        
        <br>
        <br>
        

        <button>Enviar</button>

        
    </form>


@endsection 