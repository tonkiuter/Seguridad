{{-- @extends('layout')

@section('title')
    Incidencia
@endsection

@section('content')
    
    <h1>Incidencia</h1>
    
    <a href="{{ route('incidencia.create') }}">Crear Incidencia</a>

    <ul>
        @forelse ($incidencia as $incidenciaItem)

            <li>{{ $incidenciaItem->CodigoReporte }}</li>
                <li>{{ $incidenciaItem->CodigoAlumno }}</li>
        
        @empty

        <li>No hay elementos para mostrar</li>
        
        @endforelse

        {{ $incidencia->links() }}

              
    </ul>



@endsection --}}

@extends('layout')

<!doctype html>
<html lang="en">
    <head>
        <!-- required name= '' name= '' meta tags -->
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
        <h1 class="display-3 text-center">Formato 2 Reporte de Incidencias</h1><br>
        <h2 class="text-center">DATOS DE IDENTIFICACION DEL AFECTADO</h2>
        <form class="needs-validation" method="POST" action="{{ route('incidencia.store') }}">
            @csrf
            <div class="container">
                <div class="row">
                    <div class="col-md">
                        Fecha: 
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        Codigo Reporte: <input class="form-control" type="text" required name= 'CodigoReporte'><br>
                    </div>
                    <div class="col-md">
                        Nombre: <input class="form-control" type="text" required name= 'NombreAlumno'><br>
                    </div>
                    <div class="col-md">
                        Edad: <input class="form-control" type="text" required name= 'Edad'><br>
                    </div>
                    <div class="col-md">
                        Codigo: <input class="form-control" type="text" required name= 'CodigoAlumno' ><br>
                    </div>
                    <div class="col-md">
                        Carrera: <input class="form-control" type="text" required name= 'Carrera'><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        Correo Electronico: <input class="form-control" type="text" required name= 'Email'><br>
                    </div>
                    <div class="col-md">
                        Telefono: <input class="form-control" type="text" required name= 'Telefono'><br>
                    </div>
                </div>
                <h2 class="text-center">DATOS DEL INCIDENTE</h2>
                <div class="row">
                    <div class="col-md">
                        Fecha: <br>
                    </div>
                    <div class="col-md">
                        Hora: <br>
                    </div>
                    <div class="col-md">
                        <textarea class="form-control" placeholder="Lugar (calle y cruces) Frente a (casa, oficina, baldios, etc.)" required name= 'Ubicacion'></textarea> <br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <textarea class="form-control" placeholder="DESCRIBA EL SUCESO" required name= 'Descripcion'></textarea><br>
                    </div>
                    <div class="col-md">
                        <textarea class="form-control" placeholder="¿Que Robo, daño, etc?" required name= 'ObjetosRobados'></textarea><br>
                    </div>
                </div>
                <h2 class="text-center">MEDIDA FILIACION DEL AGRESOR</h2>
                <div class="row">
                    <div class="col-md">
                        Estatura: <input class="form-control" type="text" name= 'Estatura'><br>
                    </div>
                    <div class="col-md">
                        Apariencia: <input class="form-control" type="text" name= 'Apariencia'><br>
                    </div>
                    <div class="col-md">
                        Tez: <input class="form-control" type="text" name= 'Tez'><br>
                    </div>
                    <div class="col-md">
                        Cabello: <input class="form-control" type="text" name = 'Cabello'><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        Ojos: <input class="form-control" type="text" name= 'Ojos'><br>
                    </div>
                    <div class="col-md">
                        Cara: <input class="form-control" type="text" name='Cara'><br>
                    </div>
                    <div class="col-md">
                        Boca: <input class="form-control" type="text" name= 'Boca'><br>
                    </div>
                    <div class="col-md">
                        Tipo de Ropa: <input class="form-control" type="text" name= 'TipoRopa'><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        Uso, Gorra: <input class="form-control" type="text" name='Gorra'><br>
                    </div>
                    <div class="col-md">
                        Edad Aprox: <input class="form-control" type="text" name='EdadAprox'><br>
                    </div>
                    <div class="col-md">
                        Cicatrices: <input class="form-control" type="text" name='Cicatrices'><br>
                    </div>
                    <div class="col-md">
                        Tatuajes: <input class="form-control" type="text" name="Tatuajes"><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        Piercing: <input class="form-control" type="text" name="Piercing"><br>
                    </div>
                    <div class="col-md">
                        <textarea class="form-control" placeholder="Otra seña particular" name="OtraS"></textarea> 
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <textarea class="form-control" placeholder="Metodo utilizado para huir (Cracteristcas del vehiculo en su caso)" name="Huida"></textarea><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <textarea class="form-control" placeholder="Observaciones" name="Observacion"></textarea> 
                    </div>
                </div>
            </div>
            <button class='btn btn-primary btn-lg btn-success'> Guardar </button>
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