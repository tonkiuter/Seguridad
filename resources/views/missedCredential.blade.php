<!-- @extends('layout')


@section('title')
    Credencial Perdida
@endsection

@section('content')
    
    <h1>Credencial Perdida</h1>

    <a href="{{ route('missedCrendential.create') }}">Crear Credencial Perdida Recuperada</a>
    <ul>
        @forelse ($missedCredential as $credentialItem)

            <li>{{ $credentialItem->CodigoReporte }}</li>
                <small>{{ $credentialItem->Descripcion }}</small>
        
        @empty

        <li>No hay elementos para mostrar</li>
        
        @endforelse

        {{ $missedCredential->links() }}

              
    </ul>

@endsection -->

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
        <h1 class="display-3">Credencial Perdida y Recuperada</h1>
        <form class="needs-validation" method = "POST" action="{{ route('missedCrendential.store') }}">
        @csrf
            <div class="container">
                
                <div class="row">
                    <div class="col-md">
                        Codigo de Reporte: <input class="form-control" type="text" required name='CodigoReporte'><br>
                    </div>
                    <div class="col-md">
                        Codigo de Alumno: <input class="form-control" type="text" required name= 'CodigoAlumno'><br>
                    </div>
                    <div class ="col-md">
                        Descripción: <textarea class="form-control" type="text" required name= 'Descripcion'></textarea><br>
                    </div>

                    <div class="col-md">
                        FotoIdF: <input class= "form-control" type="text" required name= 'FotoIdF'> <br>
                    </div>

                    <div class= col-md>
                        FotoIdB: <input class= "form-control" type="text" required name= 'FotoIdB'> <br>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md">
                        Fecha y Hora: Se debe cargar de server.<br>
                    </div>
                    <div class="col-md">
                        <p>Recibi INE original</p>
                    </div>
                </div>
            </div>

            <button class='btn btn-primary btn-lg btn-success'> Guardar </button>
        </form>
        Firma y sello seria despues de impreso<br>
        espacio para fotos xd
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