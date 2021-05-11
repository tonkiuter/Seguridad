@extends('layout2')

@section('title', 'Crear Alunmo')

@section('content')
    
    <h1>Crear Nuevo Alumno</h1>

<form method="POST" action="{{ route('alumnos.store') }}">
        
    @csrf
        <label>
            Codigo:
            <input type="text" name= 'Codigo'>
        </label>
        
        <br>
        <br>

        <label>
            Nombre:
            <input type="text" name= 'Nombre'> 
        </label>
        
        <br>
        <br>
        
        <label>
            Apellido Paterno:
            <input type="text" name= 'ApellidoP'> 
        </label>
        
        <br>
        <br>
        
        <label>
            Apellido Materno:
            <input type="text" name= 'ApellidoM'> 
        </label>
        
        <br>
        <br>
        
        <label>
            Carrera:
            <input type="text" name= 'Carrera'> 
        </label>
        
        <br>
        <br>

        <label>
            Telefono:
            <input type="text" name= 'Telefono'> 
        </label>

        <br>
        <br>

        <label>
            Nacimiento:
            <input type="date" name= 'Nacimiento'> 
        </label>
        
        <br>
        <br>

        <label>
            Correo:
            <input type="email" name= 'Correo'> 
        </label>
        
        <br>
        <br>

        <button>Enviar</button>

        
    </form>


@endsection 