@extends('layout2')


@section('title', 'Crear Acta Administrativa')


@section('content')

<h1>Crear nueva Acta Administrativa</h1>
    
<form method = "POST" action="{{ route('actaAdmin.store') }}">

    @csrf
        <label>
            Codigo de Reporte:
            <input type="text" name='CodigoReporte'>
        </label>
        
        <br>
        <br>

        <label>
            No. de Oficio:
            <input type="text" name= 'NoOficio'> 
        </label>
        
        <br>
        <br>
        
        <label>
            Lugar:
            <input type="text" name= 'Lugar'> 
        </label>
        
        <br>
        <br>
        
        <label>
            Codigo de Alumno:
            <input type="text" name= 'CodigoAlumno'> 
        </label>
        
        <br>
        <br>
        
        <label>
            Causa:
            <textarea name="Causa"> </textarea> 
        </label>
        <br>
        <br>

        <button>Enviar</button>


    </form>


@endsection