@extends('layout2')


@section('title', 'Crear Evento Social')


@section('content')

<h1>Evento Social</h1>
    
<form method = "POST" action="{{ route('eventoSocial.store') }}">

    @csrf
        <label>
            Codigo de Reporte:
            <input type="text" name='CodigoReporte'>
        </label>
        
        <br>
        <br>

        <label>
            Nombre Evento:
            <input type="text" name= 'NombreEvento'> 
        </label>
        
        <br>
        <br>
        
        <label>
            Fecha y Hora
            <input type="date" name= 'FechaHora'> 
        </label>
        
        <br>
        <br>
        
        <label>
            Pronostico
            <input type="text" name= 'Pronostico'> 
        </label>
        
        <br>
        <br>
        
        <label>
            MensajeSeguridad:
            <textarea name="MensajeSeguridad"> </textarea> 
        </label>
        <br>
        <br>

        <label>
            Estrategia
            <input type="text" name= 'Estrategia'>
        </label>
        <br>
        <br>

        <label>
            Recurso
            <input type="text" name= 'Recurso'>
        </label>
        <br>
        <br>

        <label>
            Croquis
            <input type="text" name= 'Croquis'>
        </label>
        <br>
        <br>

        <label>
            Organigrama
            <input type="text" name= 'Organigrama'>
        </label>
        <br>
        <br>


        <label>
            Estado
            <input type="text" name= 'Estado'>
        </label>
        <br>
        <br>

        <label>
            NombreEncargado
            <input type="text" name= 'NombreEncargado'>
        </label>
        <br>
        <br>

        <label>
            TelefonoEncargado
            <input type="text" name= 'TelefonoEncargado'>
        </label>
        <br>
        <br>

        <label>
            CorreoEncargado
            <input type="email" name= 'CorreoEncargado'>
        </label>
        <br>
        <br>
        <button>Enviar</button>


    </form>


@endsection