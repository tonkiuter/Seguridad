{{-- @extends('layout')

@section('title')
    Fallo de Camara
@endsection

@section('content')
    
    <h1>Fallo de Camara</h1>
    
    <a href="{{ route('falloCamara.create') }}">Crear Fallo de Camara</a>

    <ul>
        @forelse ($falloCamara as $falloCamaraItem)

            <li>{{ $falloCamaraItem->CodigoReporte }}</li>
                <small>{{ $falloCamaraItem->Observaciones }}</small>
        
        @empty

        <li>No hay elementos para mostrar</li>
        
        @endforelse

        {{ $falloCamara->links() }}

              
    </ul>



@endsection --}}

<!doctype html>
<html lang="es">
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
        <form method = "POST" class="needs-validation" action="{{ route('falloCamara.store') }}">
        @csrf
            <div class="container-lg">
                <div class="row">
                    <h1 class="text-center">Fallo de Camara/Switch</h1>
                </div>
                <div class="row">
                    <h2>1.- Informacion</h2>
                </div>
                <div class="row">
                    <h3>1.1.- Camara</h3>
                </div>
                <div class="row">
                    <div class="col-md">
                        Nombre: <input class="form-control" type="text" name="NoCamara" required><br><br>
                    </div>
                    <div class="col-md">
                        IP: <input class="form-control" type="text" name="IP" required><br><br>
                    </div>
                    <div class="col-md">
                        Site: <input class="form-control" type="text" name="SITE" required><br><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        Modulo: <input class="form-control" type="text" name="Modulo" required><br><br>
                    </div>
                    <div class="col-md">
                        MAC: <input class="form-control" type="text" name="Informacion" required><br><br>
                    </div>
                    <div class="col-md">
                        Modelo: <input class="form-control" type="text" name="Modelo" required><br><br>
                    </div>
                </div>
                <div class="row">
                    <h3>1.2.- Switch</h2>
                </div>
                <div class="row">
                    <div class="col-md">
                        Marca: <input class="form-control" type="text" name="Marca" required><br><br>
                    </div>
                    <div class="col-md">
                        Modelo: <input class="form-control" type="text" name="ModeloSwitch" required><br><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <h2>2.- Descripcion de la Falla</h2>
                    </div>
                    <div class="col-md">
                        <h2>3.- Diagnostico</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <textarea class="form-control" name="DescFalla" required></textarea>
                    </div>
                    <div class="col-md">
                        <textarea class="form-control" name="Diagnostico" required></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <h2>4.- Tareas de Reparacion</h2>
                    </div>
                    <div class="col-md">
                        <h2>5.- Material Utilizado</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <textarea class="form-control" name="Toreos" required></textarea>
                    </div>
                    <div class="col-md">
                        <textarea class="form-control" name="MateriaUt" required></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <h2>6.- Problema Solucionado: </h2>
                    </div>
                    <div class="col-md">
                        <h2>7.- Observaciones</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" name="Solucionado" id="customCheck1">
                            <label class="custom-control-label" for="customCheck1">SI</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input"  id="customCheck2">
                            <label class="custom-control-label" for="customCheck2">NO</label>
                        </div>
                    </div>
                    <div class="col-md">
                        <textarea class="form-control" name="Observaciones" required></textarea>
                    </div>
                </div>
            </div>
            <button class='btn btn-primary btn-lg btn-success' href=''>Guardar</button>
        </form>
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
        <br>
        <!--Pie de pagina-->
        <div align= "center">
            <h3>Menu</h3>
            <a class='btn btn-primary btn-lg btn-primary' href="TablaMantenimiento">Pagina Anterior</a>
            <a class='btn btn-primary btn-lg btn-success' href=''>Guardar Offline</a>
            <a class='btn btn-primary btn-lg btn-success' href=''>Guardar Online</a>
            <a class='btn btn-primary btn-lg btn-danger' href="">Cerrar Sesion</a>
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