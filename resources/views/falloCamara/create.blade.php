@extends('layout2')


@section('title', 'Crear Evento Social')


@section('content')

<h1>Fallo Camara</h1>
    
<form method = "POST" action="{{ route('falloCamara.store') }}">

    @csrf
        <label>
            Codigo de Reporte:
            <input type="text" name='CodigoReporte'>
        </label>
        
        <br>
        <br>

        <label>
            No. de Camara:
            <input type="text" name= 'NoCamara'> 
        </label>
        
        <br>
        <br>
        
        <label>
            Informacion
            <input type="date" name= 'Informacion'> 
        </label>
        
        <br>
        <br>
        
        <label>
            IP
            <input type="text" name= 'IP'> 
        </label>
        
        <br>
        <br>
        
        <label>
            SITE:
            <input type="text" name= 'SITE'>
        </label>
        <br>
        <br>

        <label>
            Modulo
            <input type="text" name= 'Modulo'>
        </label>
        <br>
        <br>

        <label>
            Marca
            <input type="text" name= 'Marca'>
        </label>
        <br>
        <br>

        <label>
            DescFalla
            <input type="text" name= 'DescFalla'>
        </label>
        <br>
        <br>

        <label>
            Toreos
            <input type="text" name= 'Toreos'>
        </label>
        <br>
        <br>


        <label>
            MateriaUt
            <input type="text" name= 'MateriaUt'>
        </label>
        <br>
        <br>

        <label>
            Solucionado
            <input type="text" name= 'Solucionado'>
        </label>
        <br>
        <br>

        <label>
            Observaciones
            <input type="text" name= 'Observaciones'>
        </label>
        <br>
        <br>

        <button>Enviar</button>


    </form>


@endsection