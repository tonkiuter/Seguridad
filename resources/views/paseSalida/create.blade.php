@extends('layout2')

@section('title', 'Pase Salida')

@section('content')
    
    <h1>Crear Pase de Salida</h1>

<form method="POST" action="{{ route('paseSalida.store') }}">
        
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
            FotoIdF:
            <input type="text" name= 'FotoIdF'> 
        </label>
        
        <br>
        <br>
        
        <label>
            FotoIdB:
            <input type="text" name= 'FotoIdB'> 
        </label>
        
        <br>
        <br>
        
        <label>
            Sello:
            <input type="text" name= 'Sello'> 
        </label>

        <br>
        <br>
        
        <label>
            Descripcion:
            <input type="text" name= 'Descripcion'> 
        </label>

        <br>
        <br>
        
        <label>
            Fecha:
            <input type="text" name= 'Fecha'> 
        </label>

        <button>Enviar</button>

        
    </form>


@endsection 