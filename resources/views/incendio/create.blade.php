@extends('layout2')

@section('title', 'Crear Alunmo')

@section('content')
    
    <h1>Crear Nuevo Incendio </h1>

<form method="POST" action="{{ route('incendio.store') }}">
        
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
            NumEquipo:
            <input type="text" name= 'NumEquipo'> 
        </label>
        
        <br>
        <br>
        
        <label>
            TipoEquipo:
            <input type="text" name= 'TipoEquipo'> 
        </label>
        
        <br>
        <br>
        
        <label>
            Planta:
            <input type="text" name= 'Planta'> 
        </label>
        
        <br>
        <br>
        
        <label>
            Agente:
            <input type="text" name= 'Agente'> 
        </label>
        
        <br>
        <br>
        
        <label>
            CapacidadLB:
            <input type="text" name= 'CapacidadLB'> 
        </label>
        
        <br>
        <br>

        <label>
            CapacidadKG:
            <input type="text" name= 'CapacidadKG'> 
        </label>
        
        <br>
        <br>

        
        <label>
            Soporte:
            <input type="text" name= 'Soporte'> 
        </label>
        
        <br>
        <br>

                
        <label>
            UltimaRecarga:
            <input type="date" name= 'UltimaRecarga'> 
        </label>

        <br>
        <br>

                
        <label>
            PH:
            <input type="text" name= 'PH'> 
        </label>

        <br>
        <br>

                
        <label>
            Actividad:
            <input type="text" name= 'Actividad'> 
        </label>

        <br>
        <br>
       
        <label>
            Comentario:
            <input type="text" name= 'Comentario'> 
        </label>

        <br>
        <br>
       
        <label>
            Existe:
            <input type="text" name= 'Existe'> 
        </label>
        

        <button>Enviar</button>

        
    </form>


@endsection 