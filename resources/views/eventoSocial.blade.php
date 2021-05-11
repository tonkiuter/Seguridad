{{-- @extends('layout')

@section('title')
    Evento Social
@endsection

@section('content')
    
    <h1>Evento Social</h1>
    
    <a href="{{ route('eventoSocial.create') }}">Crear Evento Social</a>

    <ul>
        @forelse ($eventoSocial as $eventoItem)

            <li>{{ $eventoItem->NombreEvento }}</li>
                <small>{{ $eventoItem->FechaHora }}</small>
        
        @empty

        <li>No hay elementos para mostrar</li>
        
        @endforelse

        {{ $eventoSocial->links() }}

              
    </ul>



@endsection --}}


<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/theme.css">

        <!--Icono en la pestaña-->
        <title>Supervision | Servicios Generales</title>
        <link rel = "icon" href = "353px-Escudo_UdeG.svg.png" type = "image/icon type">
    </head>
    <body>
         <!-- Barra de navegacion -->
        <nav class="navbar navbar-light " style="background-color:#6633ff;">
            <a class="navbar-brand" href="#">
                <img src="353px-Escudo_UdeG.svg.png" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
                Servicios Generales
            </a>
        </nav>
        <!--Usuario logueado-->
        <p align=left>Logueado como: </p>
        <br>
        <h1 class="display-4">Evento Socio-Organizativo</h1>
        <form class="needs-validation" method = "POST" action="{{ route('eventoSocial.store') }}">
            @csrf
            <div class="container">
                <div class="row">
                    <div class="col-md">
                        Nombre del Evento: <input class="form-control" type="text" name="NombreEvento" required><br>
                    </div>
                    <div class="col-md">
                        Fecha:
                    </div>
                    <div class="col-md">
                        Hora:
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        Objetivos: <textarea class="form-control" name="Objetivos" required></textarea>
                    </div>
                    <div class="col-md">
                        Pronostico del Tiempo: <textarea class="form-control" name="Pronostico" required></textarea>
                    </div>
                    <div class="col-md">
                        Mensaje General de Seguridad: <textarea class="form-control" name="MensajeSeguridad" required></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        Estrategias: <textarea class="form-control" name="Estrategia" required></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        Recursos: <textarea name="Recurso" class="form-control" required></textarea>
                    </div>
                </div>
                <div class="row">
                    {{-- <div class="col-md">
                        Requerido: <textarea class="form-control" required></textarea>
                    </div> No se que es!!! --}}
                    <div class="col-md">
                        Asignacion: <textarea class="form-control" required></textarea>
                    </div>
                    <div class="col-md">
                        Ubicacion: <input class="form-control" type="text" name="Ubicacion" required><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Croquis: </label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="Croquis" required>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Organigrama: </label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="Organigrama" required>
                        </div>
                    </div>
                    <div class="col-md">
                        Estado de Fuerza: <input class="form-control" type="text" name="Estado" required><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        Encargado: <input type="text" class="form-control" name="NombreEncargado" required><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        Nombre de Alumno: <input class="form-control" type="text" name="NombreAlumno" required><br>
                    </div>
                    <div class ="col-md">
                        Telefono: <input class="form-control" type="text" name="TelefonoEncargado" required><br>
                    </div>
                    <div class="col-md">
                        Correo: <input class="form-control" type="text" name="CorreoEncargado" required><br>
                    </div>
                </div>
            </div>
            <button class='btn btn-primary btn-lg btn-success' href=''>Guardar Offline</button>
        </form>
        <br>
        <script>
            // Example starter JavaScript for disabling form submissions if there are invalid fields
            (function() {
                'use strict';
                window.addEventListener('load', function() {
                    // Fetch all the forms we want to apply custom Bootstrap validation styles to
                    var forms = document.getElementsByClassName('needs-validation');
                    // Loop over them and prevent submission
                    var validation = Array.prototype.filter.call(forms, function(form) {
                        form.addEventListener('submit', function(event) {
                            if (form.checkValidity() === false) {
                                event.preventDefault();
                                event.stopPropagation();
                            }
                            form.classList.add('was-validated');
                        }, false);
                    });
                }, false);
            })();
        </script>
        <!--Pie de pagina-->
        <div align= "center">
            <h3>Menu</h3>
            <a class='btn btn-primary btn-lg btn-primary' href="TablaReportes">Pagina Anterior</a>
            <a class='btn btn-primary btn-lg btn-success' href=''>Guardar Offline</a>
            <a class='btn btn-primary btn-lg btn-success' href=''>Guardar Online</a>
            <a class='btn btn-primary btn-lg btn-dark' href="">Camara</a>
            <a class='btn btn-primary btn-lg btn-warning' href="">Imprimir</a>
        </div>
        <br>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script>window.JQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/docs.min.js"></script>
    </body>
</html>