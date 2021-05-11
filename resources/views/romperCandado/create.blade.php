@extends('layout2')

@section('title', 'Romper Candado')

@section('content')
    
    <h1>Romper Candado</h1>

<form method="POST" action="{{ route('romperCandado.store') }}">
        
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
            Descripcion:
            <input type="text" name= 'Descripcion'> 
        </label>

        <br>
        <br>
        

        <button>Enviar</button>
        
    </form>

@endsection 