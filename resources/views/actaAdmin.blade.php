{{-- @extends('layout')

@section('title')
    Acta Administrativa
@endsection

@section('content')

<a href="{{ route('actaAdmin.create') }}">Crear Acta</a>
    
    <h1>Acta Administrativa</h1>
    <ul>
        @forelse ($actaAdmin as $actaItem)

            <li>{{ $actaItem->CodigoReporte }}</li>
                <small>{{ $actaItem->Causa }}</small>
        
        @empty

        <li>No hay elementos para mostrar</li>
        
        @endforelse

        {{ $actaAdmin->links() }}

              
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
        <h1 class="display-4">Acto Administrativo</h1>
        <form class="needs-validation" method = "POST" action="{{ route('actaAdmin.store') }}">
            @csrf
            <div class="container">
                <div class="row">
                    <div class="col-md">
                        No. Oficio: <input class="form-control" name="NoOficio" type="text" required><br>
                    </div>
                    <div class="col-md">
                        Fecha: <br>
                    </div>
                    <div class="col-md">
                        Hora: <br>
                    </div>
                    <div class="col-md">
                        Lugar: <input class="form-control" name="Lugar" type="text" required><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        Nombre de Alumno: <input class="form-control" name="NombreAlumno" type="text" required><br>
                    </div>
                    <div class="col-md">
                        Codigo: <input class="form-control" name="CodigoAlumno" type="text" required><br>
                    </div>
                    <div class="col-md">
                        Causa: <textarea class="form-control" name="Causa" required></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        Recepcion de documentos en:
                        <p>
                            <mark>Rectoria</mark><br>
                            <mark>Secretaria Academica</mark><br>
                            <mark>Secretaria Administrativa</mark><br>
                            <mark>Oficina de Comisiones y Responsabilidades</mark><br>
                        </p>
                    </div>
                </div>
            </div>
            <button class='btn btn-primary btn-lg btn-success' href=''>Guardar</button>
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