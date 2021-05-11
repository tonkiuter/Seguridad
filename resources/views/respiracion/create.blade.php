@extends('layout2')

@section('title', 'Respiracion')

@section('content')
    
    <h1>Crear Respiracion</h1>

<form method="POST" action="{{ route('respiracion.store') }}">
        
    @csrf
        <label>
            CodigoReporte:
            <input type="text" name= 'CodigoReporte'>
        </label>
        
        <br>
        <br>

        <label>
            Anio:
            <input type="text" name= 'Anio'> 
        </label>
        
        <br>
        <br>
        
        <label>
            Mes:
            <input type="text" name= 'Mes'> 
        </label>
        
        <br>
        <br>
        
        <label>
            Num Equipo:
            <input type="text" name= 'NumEquipo'> 
        </label>
        
        <br>
        <br>
        
        <label>
            Observaciones:
            <input type="text" name= 'Observaciones'> 
        </label>

        <br>
        <br>
        
        <label>
            Reviso:
            <input type="text" name= 'Reviso'> 
        </label>

        <br>
        <br>
        
        <label>
            TipoEquipo:
            <input type="text" name= 'TipoEquipo'> 
        </label>

        <button>Enviar</button>
        
    </form>

@endsection 