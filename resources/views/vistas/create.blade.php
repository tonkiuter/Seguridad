@extends('layout2')

@section('title', 'Solicitud Labs')

@section('content')
    
    <h1>Vistas</h1>

<form method="POST" action="{{ route('vistas.store') }}">
        
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