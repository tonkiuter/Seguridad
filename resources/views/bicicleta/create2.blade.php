@extends('layout2')


@section('title', 'Crear Bicicleta')


@section('content')

<h1>Bicicleta sin Seguro</h1>
    
<form method = "POST" action="{{ route('bicicleta.store') }}">

    @csrf
        <label>
            Codigo de Reporte:
            <input type="text" name='CodigoReporte'>
        </label>
        
        <br>
        <br>

        <label>
            Codigo Alumno:
            <input type="text" name= 'CodigoAlumno'> 
        </label>
        
        <br>
        <br>
        
        <label>
            FotoIdF
            <input type="text" name= 'FotoIdF'> 
        </label>
        
        <br>
        <br>
        
        <label>
            FotoIdB
            <input type="text" name= 'FotoIdB'> 
        </label>
        
        <br>
        <br>
        
        <label>
            Descripcion:
            <textarea name="Descripcion"> </textarea> 
        </label>
        <br>
        <br>

        <button>Enviar</button>


    </form>


@endsection

