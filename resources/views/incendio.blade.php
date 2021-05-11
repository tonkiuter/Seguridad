<!-- @extends('layout')

@section('title')
    Incendio
@endsection

@section('content')
    
    <h1>Incendios</h1>
    
    <a href="{{ route('incendio.create') }}">Crear Incendio</a>

    <ul>
        @forelse ($incendio as $incendioItem)

            <li>{{ $incendioItem->CodigoReporte }}</li>
                <li>{{ $incendioItem->Comentario }}</li>
        
        @empty

        <li>No hay elementos para mostrar</li>
        
        @endforelse

        {{ $incendio->links() }}

              
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
        <form class="needs-validation">
        <table class="table table-bordered table-striped">
            <thead>
                <th style="text-align:center" scope="col" colspan = "24">EQUIPO DE PROTECCION PERSONAL CONTRA INCENDIO</th>
            </thead>
            <tbody>
                <tr>
                    <th style="text-align:center">
                        <label class="my-1 mr-2" for="inlineFormCustomSelectPref">GABINETE #</label>
                        <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" required>
                            <option selected>Elija...</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </th>
                    <th style="text-align:center" colspan = "6">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                UBICACION: 
                            </div>
                            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
                        </div>
                    </th>
                    <th style="text-align:center" colspan = "2">"SI" ESTA</th>
                    <th style="text-align:center"><img src = "hiclipart.com.png" width = "25" height = "25"></th>
                    <th style="text-align:center" colspan = "2">"NO" ESTA</th>
                    <th style="text-align:center"><img src = "clipart891075.png" width = "25" height = "25"></th>
                    <th style="text-align:center" colspan = "3">EQUIPOS OPERATIVOS</th>
                    <th style="text-align:center" class="bg-success">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                            <label class="custom-control-label" for="customCheck1">SI</label>
                        </div>
                    </th>
                    <th style="text-align:center" colspan = "2" class="bg-danger">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck2">
                            <label class="custom-control-label" for="customCheck2">NO</label>
                        </div>
                    </th>
                    <th style="text-align:center" colspan = "3">HACHA Y GUIA MAT-PEL</th>
                    <th style="text-align:center" class="bg-success">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck3">
                            <label class="custom-control-label" for="customCheck3">SI</label>
                        </div>
                    </th>
                    <th style="text-align:center" class="bg-danger">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck4">
                            <label class="custom-control-label" for="customCheck4">NO</label>
                        </div>
                    </th>
                </tr>
                <tr>
                    <th style="text-align:center">AÑO</th>
                    <th style="text-align:center" colspan = "3">CASCO COMPLETO</th>
                    <th style="text-align:center" colspan = "3">MONJA</th>
                    <th style="text-align:center" colspan = "3">CHAQUETON COMPLETO</th>
                    <th style="text-align:center" colspan = "3">GUANTES</th>
                    <th style="text-align:center" colspan = "3">PANTALONERA COMPLETA</th>
                    <th style="text-align:center" colspan = "3">TIRANTES</th>
                    <th style="text-align:center" colspan = "3">BOTAS</th>
                    <th style="text-align:center" colspan = "2" rowspan = "14"></th>
                </tr>
                <tr>
                    <th></th>
                    <th style="text-align:center">EQ #1</th>
                    <th style="text-align:center">EQ #2</th>
                    <th style="text-align:center">EQ #3</th>
                    <th style="text-align:center">EQ #1</th>
                    <th style="text-align:center">EQ #2</th>
                    <th style="text-align:center">EQ #3</th>
                    <th style="text-align:center">EQ #1</th>
                    <th style="text-align:center">EQ #2</th>
                    <th style="text-align:center">EQ #3</th>
                    <th style="text-align:center">EQ #1</th>
                    <th style="text-align:center">EQ #2</th>
                    <th style="text-align:center">EQ #3</th>
                    <th style="text-align:center">EQ #1</th>
                    <th style="text-align:center">EQ #2</th>
                    <th style="text-align:center">EQ #3</th>
                    <th style="text-align:center">EQ #1</th>
                    <th style="text-align:center">EQ #2</th>
                    <th style="text-align:center">EQ #3</th>
                    <th style="text-align:center">EQ #1</th>
                    <th style="text-align:center">EQ #2</th>
                    <th style="text-align:center">EQ #3</th>
                </tr>
                <tr>
                    <th style="text-align:center">
                        <label class="my-1 mr-2" for="inlineFormCustomSelectPref">MES</label>
                        <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" required>
                            <option selected>Elija...</option>
                            <option value="Enero">Enero</option>
                            <option value="Febrero">Febrero</option>
                            <option value="Marzo">Marzo</option>
                            <option value="Abril">Abril</option>
                            <option value="Mayo">Mayo</option>
                            <option value="Junio">Junio</option>
                            <option value="Julio">Julio</option>
                            <option value="Agosto">Agosto</option>
                            <option value="Septiembre">Septiembre</option>
                            <option value="Octubre">Octubre</option>
                            <option value="Noviembre">Noviembre</option>
                            <option value="Diciembre">Diciembre</option>
                        </select>
                    </th>
                    <th>
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch1" required>
                            <label class="custom-control-label" for="customSwitch1">NO/SI</label>
                        </div>
                    </th>
                    <th>
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch2" required>
                            <label class="custom-control-label" for="customSwitch2">NO/SI</label>
                        </div>
                    </th>
                    <th>
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch3" required>
                            <label class="custom-control-label" for="customSwitch3">NO/SI</label>
                        </div>
                    </th>
                    <th>
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch4" required>
                            <label class="custom-control-label" for="customSwitch4">NO/SI</label>
                        </div>
                    </th>
                    <th>
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch5" required>
                            <label class="custom-control-label" for="customSwitch5">NO/SI</label>
                        </div>
                    </th>
                    <th>
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch6" required>
                            <label class="custom-control-label" for="customSwitch6">NO/SI</label>
                        </div>
                    </th>
                    <th>
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch7" required>
                            <label class="custom-control-label" for="customSwitch7">NO/SI</label>
                        </div>
                    </th>
                    <th>
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch8" required>
                            <label class="custom-control-label" for="customSwitch8">NO/SI</label>
                        </div>
                    </th>
                    <th>
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch9" required>
                            <label class="custom-control-label" for="customSwitch9">NO/SI</label>
                        </div>
                    </th>
                    <th>
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch10" required>
                            <label class="custom-control-label" for="customSwitch10">NO/SI</label>
                        </div>
                    </th>
                    <th>
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch11" required>
                            <label class="custom-control-label" for="customSwitch11">NO/SI</label>
                        </div>
                    </th>
                    <th>
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch12" required>
                            <label class="custom-control-label" for="customSwitch12">NO/SI</label>
                        </div>
                    </th>
                    <th>
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch13" required>
                            <label class="custom-control-label" for="customSwitch13">NO/SI</label>
                        </div>
                    </th>
                    <th>
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch14" required>
                            <label class="custom-control-label" for="customSwitch14">NO/SI</label>
                        </div>
                    </th>
                    <th>
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch15" required>
                            <label class="custom-control-label" for="customSwitch15">NO/SI</label>
                        </div>
                    </th>
                    <th>
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch16" required>
                            <label class="custom-control-label" for="customSwitch16">NO/SI</label>
                        </div>
                    </th>
                    <th>
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch17" required>
                            <label class="custom-control-label" for="customSwitch17">NO/SI</label>
                        </div>
                    </th>
                    <th>
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch18" required>
                            <label class="custom-control-label" for="customSwitch18">NO/SI</label>
                        </div>
                    </th>
                    <th>
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch19" required>
                            <label class="custom-control-label" for="customSwitch19">NO/SI</label>
                        </div>
                    </th>
                    <th>
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch20" required>
                            <label class="custom-control-label" for="customSwitch20">NO/SI</label>
                        </div>
                    </th>
                    <th>
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch21" required>
                            <label class="custom-control-label" for="customSwitch21">NO/SI</label>
                        </div>
                    </th>
                </tr>
            </tbody>
        </table>
        <form>
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