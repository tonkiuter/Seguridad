@extends('layout2')

@section('title', 'Crear Incidencia')

@section('content')
    
    <h1>Crear Nueva Incidencia </h1>

<form method="POST" action="{{ route('incidencia.store') }}">
        
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
            FechaHora:
            <input type="datetime" name= 'FechaHora'> 
        </label>
        
        <br>
        <br>
        
        <label>
            Ubicacion:
            <input type="text" name= 'Ubicacion'> 
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
            ObjetosP:
            <input type="text" name= 'ObjetosP'> 
        </label>
        
        <br>
        <br>
        
        <label>
            FotoId:
            <input type="text" name= 'FotoId'> 
        </label>
        
        <br>
        <br>
        
        <label>
            Estatura:
            <input type="text" name= 'Estatura'> 
        </label>
        
        <br>
        <br>

        <label>
            Apariencia:
            <input type="text" name= 'Apariencia'> 
        </label>
        
        <br>
        <br>

        
        <label>
            Tez:
            <input type="text" name= 'Tez'> 
        </label>
        
        <br>
        <br>

                
        <label>
            Cabello:
            <input type="text" name= 'Cabello'> 
        </label>

        <br>
        <br>

                
        <label>
            Ojos:
            <input type="text" name= 'Ojos'> 
        </label>

        <br>
        <br>

                
        <label>
            Cara:
            <input type="text" name= 'Cara'> 
        </label>

        <br>
        <br>
       
        <label>
            Boca:
            <input type="text" name= 'Boca'> 
        </label>

        <br>
        <br>
       
        <label>
            TipoRopa:
            <input type="text" name= 'TipoRopa'> 
        </label>

        <br>
        <br>
       
        <label>
            Gorra:
            <input type="text" name= 'Gorra'> 
        </label>

        <br>
        <br>
       
        <label>
            TipoRopa:
            <input type="text" name= 'TipoRopa'> 
        </label>

        <br>
        <br>
       
        <label>
            EdadAprox:
            <input type="text" name= 'EdadAprox'> 
        </label>


        <br>
        <br>
       
        <label>
            Cicatrices:
            <input type="text" name= 'Cicatrices'> 
        </label>

        <br>
        <br>
       
        <label>
            Tatuajes:
            <input type="text" name= 'Tatuajes'> 
        </label>

        <br>
        <br>
       
        <label>
            Piercing:
            <input type="text" name= 'Piercing'> 
        </label>

        <br>
        <br>
       
        <label>
            OtraS:
            <input type="text" name= 'OtraS'> 
        </label>

        <br>
        <br>
       
        <label>
            Huida:
            <input type="text" name= 'Huida'> 
        </label>

        <br>
        <br>
       
        <label>
            Observacion:
            <input type="text" name= 'Observacion'> 
        </label>
        

        <button>Enviar</button>

        
    </form>


@endsection 