@extends('layout2')

@section('title', 'Solicitud de Videocamara')

@section('content')
    
    <h1>Solicitud Videocamara</h1>

<form method="POST" action="{{ route('solicitudVideocamara.store') }}">
        
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
            Atendio:
            <input type="text" name= 'Atendio'> 
        </label>
        
        <br>
        <br>
        
        <label>
            Fecha:
            <input type="date" name= 'Fecha'> 
        </label>
        
        <br>
        <br>
        
        <label>
            NoCamara:
            <input type="text" name= 'NoCamara'> 
        </label>

        <br>
        <br>
        
        <label>
            Horario:
            <input type="text" name= 'Horario'> 
        </label>

        <br>
        <br>
        
        <label>
            Hecho:
            <input type="text" name= 'Hecho'> 
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
        

        <button>Enviar</button>
        
    </form>

@endsection 