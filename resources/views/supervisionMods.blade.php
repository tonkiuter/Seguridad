{{-- @extends('layout')

@section('title')
    SupervisionMods
@endsection

@section('content')
    
    <h1>Supervision Mods</h1>
    
    <a href="{{ route('supervisionMods.create') }}">Crear Supervision Mods</a>

    <ul>
        @forelse ($supervisionMods as $supervisionModsItem)

            <li>{{ $supervisionModsItem->Codigo_Reporte }}</li>
                <li>{{ $supervisionModsItem->Nombre }}</li>
                    <li>{{ $supervisionModsItem->RegaderaS }}</li>
        
        @empty

        <li>No hay elementos para mostrar</li>
        
        @endforelse

        {{ $supervisionMods->links() }}

              
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
        <form class="needs-validation" method="POST" action="{{ route('supervisionMods.store') }}">
        @csrf
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th style="text-align:center" scope="col" colspan = "7">UNIVERSIDAD DE GUADALAJARA</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th style="text-align:center" scope="col" colspan="7">Centro Universitario de Ciencias Exactas e Ingenierias</th>
                </tr>
                <tr>
                    <th style="text-align:center" scope="col" colspan="7">Seguridad CUCEI</th>
                </tr>
                <tr>
                    <th colspan="7">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-default">SUPERVISION Nombre del Modulo y/o Instalacion</span>
                            </div>
                            <label for="validationCustom01"></label>
                            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required  name="Nombre">
                            <div class="invalid-feedback">
                                    Falta Nombre.
                            </div>
                        </div>
                    </th>
                </tr>
                <tr class="table-active">
                    <th style="text-align:center">Puntos de Revision</th>
                    <th style="text-align:center" colspan = "2">Señaletica</th>
                    <th style="text-align:center" colspan = "2">Cumple</th>
                    <th style="text-align:center" colspan = "2">Comentarios y/o Observaciones</th>
                </tr>
                <tr>
                    <th style="text-align:center" colspan = "7" class="table-dark">Seguridad y Proteccion Civil</th>
                </tr>
                <tr>
                    <th style="text-align:center">Ruta de Evacuacion</th>
                    <th style="text-align:center" class="bg-success">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                            <label class="custom-control-label" for="customCheck1">Si</label>
                        </div>
                    </th>
                    <th style="text-align:center" class="bg-danger">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck2">
                            <label class="custom-control-label" for="customCheck2">NO</label>
                        </div>
                    </th>
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
                    <th style="text-align:center" colspan = "2">
                        <div class="custom-control custom-checkbox custom-control-inline">
                            <input type="checkbox" class="custom-control-input" id="customCheck5">
                            <label class="custom-control-label" for="customCheck5">DERECHA</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-control-inline">
                            <input type="checkbox" class="custom-control-input" id="customCheck6">
                            <label class="custom-control-label" for="customCheck6">IZQUIERDA</label>
                        </div>
                    </th>
                </tr>
                <tr>
                    <th style="text-align:center">Salida de Emergencia</th>
                    <th style="text-align:center" class="bg-success">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck7">
                            <label class="custom-control-label" for="customCheck7">Si</label>
                        </div>
                    </th>
                    <th style="text-align:center" class="bg-danger">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck8">
                            <label class="custom-control-label" for="customCheck8">NO</label>
                        </div>
                    </th>
                    <th style="text-align:center" class="bg-success">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck9">
                            <label class="custom-control-label" for="customCheck9">SI</label>
                          </div>
                    </th>
                    <th style="text-align:center" class="bg-danger">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck10">
                            <label class="custom-control-label" for="customCheck10">NO</label>
                        </div>
                    </th>
                    <th style="text-align:center" colspan = "2">
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </th>
                </tr>
                <tr>
                    <th style="text-align:center">No Obstruir Salida de Emergencia</th>
                    <th style="text-align:center" class="bg-success">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck11">
                            <label class="custom-control-label" for="customCheck11">Si</label>
                        </div>
                    </th>
                    <th style="text-align:center" class="bg-danger">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck12">
                            <label class="custom-control-label" for="customCheck12">NO</label>
                        </div>
                    </th>
                    <th style="text-align:center" class="bg-success">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck13">
                            <label class="custom-control-label" for="customCheck13">SI</label>
                          </div>
                    </th>
                    <th style="text-align:center" class="bg-danger">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck14">
                            <label class="custom-control-label" for="customCheck14">NO</label>
                        </div>
                    </th>
                    <th style="text-align:center" colspan = "2">
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </th>
                </tr>
                <tr>
                    <th style="text-align:center">En Caso de Sismo/Incendio</th>
                    <th style="text-align:center" class="bg-success">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck15">
                            <label class="custom-control-label" for="customCheck15">Si</label>
                        </div>
                    </th>
                    <th style="text-align:center" class="bg-danger">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck16">
                            <label class="custom-control-label" for="customCheck16">NO</label>
                        </div>
                    </th>
                    <th style="text-align:center" class="bg-success">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck17">
                            <label class="custom-control-label" for="customCheck17">SI</label>
                          </div>
                    </th>
                    <th style="text-align:center" class="bg-danger">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck18">
                            <label class="custom-control-label" for="customCheck18">NO</label>
                        </div>
                    </th>
                    <th style="text-align:center" colspan = "2">
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </th>
                </tr>
                <tr>
                    <th style="text-align:center" rowspan = "2">Extintores</th>
                    <th style="text-align:center" rowspan = "2" class="bg-success">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck19">
                            <label class="custom-control-label" for="customCheck19">SI</label>
                        </div>
                    </th>
                    <th style="text-align:center" rowspan = "2" class="bg-danger">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck20">
                            <label class="custom-control-label" for="customCheck20">NO</label>
                        </div>
                    </th>
                    <th style="text-align:center" rowspan = "2" class="bg-success">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck21">
                            <label class="custom-control-label" for="customCheck21">SI</label>
                        </div>
                    </th>
                    <th style="text-align:center" rowspan = "2" class="bg-danger">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck22">
                            <label class="custom-control-label" for="customCheck22">SI</label>
                        </div>
                    </th>
                    <th style="text-align:center" colspan = "2">
                        PQS
                        <div class="custom-control custom-checkbox custom-control-inline">
                            <input type="checkbox" class="custom-control-input" id="customCheck24">
                            <label class="custom-control-label" for="customCheck24">1 KG</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-control-inline">
                            <input type="checkbox" class="custom-control-input" id="customCheck25">
                            <label class="custom-control-label" for="customCheck25">2 KG</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-control-inline">
                            <input type="checkbox" class="custom-control-input" id="customCheck26">
                            <label class="custom-control-label" for="customCheck26">2.5 KG</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-control-inline">
                            <input type="checkbox" class="custom-control-input" id="customCheck27">
                            <label class="custom-control-label" for="customCheck27">4.5 KG</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-control-inline">
                            <input type="checkbox" class="custom-control-input" id="customCheck28">
                            <label class="custom-control-label" for="customCheck28">6 KG</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-control-inline">
                            <input type="checkbox" class="custom-control-input" id="customCheck29">
                            <label class="custom-control-label" for="customCheck29">9 KG</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-control-inline">
                            <input type="checkbox" class="custom-control-input" id="customCheck30">
                            <label class="custom-control-label" for="customCheck30">35 KG</label>
                        </div>
                        <tr>
                            <th style="text-align:center">
                                CO2
                                <div class="custom-control custom-checkbox custom-control-inline">
                                    <input type="checkbox" class="custom-control-input" id="customCheck32">
                                    <label class="custom-control-label" for="customCheck32">5 LBS</label>
                                </div>
                                <div class="custom-control custom-checkbox custom-control-inline">
                                    <input type="checkbox" class="custom-control-input" id="customCheck33">
                                    <label class="custom-control-label" for="customCheck33">10 LBS</label>
                                </div>
                                <div class="custom-control custom-checkbox custom-control-inline">
                                    <input type="checkbox" class="custom-control-input" id="customCheck34">
                                    <label class="custom-control-label" for="customCheck34">15 LBS</label>
                                </div>
                            </th>
                            <th style="text-align:center">
                                HFC - 236
                                <div class="custom-control custom-checkbox custom-control-inline">
                                    <input type="checkbox" class="custom-control-input" id="customCheck36">
                                    <label class="custom-control-label" for="customCheck36">2.5 KG</label>
                                </div>
                                <div class="custom-control custom-checkbox custom-control-inline">
                                    <input type="checkbox" class="custom-control-input" id="customCheck37">
                                    <label class="custom-control-label" for="customCheck37">4 KG</label>
                                </div>
                                <div class="custom-control custom-checkbox custom-control-inline">
                                    <input type="checkbox" class="custom-control-input" id="customCheck38">
                                    <label class="custom-control-label" for="customCheck38">4.5 KG</label>
                                </div>
                            </th>
                        </tr>
                    </th>
                </tr>
                <tr>
                    <th style="text-align:center">Hidrante</th>
                    <th style="text-align:center" class="bg-success">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck39">
                            <label class="custom-control-label" for="customCheck39">Si</label>
                        </div>
                    </th>
                    <th style="text-align:center" class="bg-danger">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck40">
                            <label class="custom-control-label" for="customCheck40">NO</label>
                        </div>
                    </th>
                    <th style="text-align:center" class="bg-success">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck41">
                            <label class="custom-control-label" for="customCheck41">SI</label>
                          </div>
                    </th>
                    <th style="text-align:center" class="bg-danger">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck42">
                            <label class="custom-control-label" for="customCheck42">NO</label>
                        </div>
                    </th>
                    <th style="text-align:center" colspan = "2">
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </th>
                </tr>
                <tr>
                    <th style="text-align:center">Botiquin Primeros Auxilios</th>
                    <th style="text-align:center" class="bg-success">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck43">
                            <label class="custom-control-label" for="customCheck43">Si</label>
                        </div>
                    </th>
                    <th style="text-align:center" class="bg-danger">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck44">
                            <label class="custom-control-label" for="customCheck44">NO</label>
                        </div>
                    </th>
                    <th style="text-align:center" class="bg-success">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck45">
                            <label class="custom-control-label" for="customCheck45">SI</label>
                          </div>
                    </th>
                    <th style="text-align:center" class="bg-danger">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck46">
                            <label class="custom-control-label" for="customCheck46">NO</label>
                        </div>
                    </th>
                    <th style="text-align:center" colspan = "2">
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </th>
                </tr>
                <tr>
                    <th style="text-align:center">Desfribilador Automatico Externo (DAE)</th>
                    <th style="text-align:center" class="bg-success">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck47">
                            <label class="custom-control-label" for="customCheck47">Si</label>
                        </div>
                    </th>
                    <th style="text-align:center" class="bg-danger">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck48">
                            <label class="custom-control-label" for="customCheck48">NO</label>
                        </div>
                    </th>
                    <th style="text-align:center" class="bg-success">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck49">
                            <label class="custom-control-label" for="customCheck49">SI</label>
                          </div>
                    </th>
                    <th style="text-align:center" class="bg-danger">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck50">
                            <label class="custom-control-label" for="customCheck50">NO</label>
                        </div>
                    </th>
                    <th style="text-align:center" colspan = "2">
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </th>
                </tr>
                <tr>
                    <th style="text-align:center">Alarma</th>
                    <th style="text-align:center" class="bg-success">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck51">
                            <label class="custom-control-label" for="customCheck51">Si</label>
                        </div>
                    </th>
                    <th style="text-align:center" class="bg-danger">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck52">
                            <label class="custom-control-label" for="customCheck52">NO</label>
                        </div>
                    </th>
                    <th style="text-align:center" class="bg-success">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck53">
                            <label class="custom-control-label" for="customCheck53">SI</label>
                          </div>
                    </th>
                    <th style="text-align:center" class="bg-danger">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck54">
                            <label class="custom-control-label" for="customCheck54">NO</label>
                        </div>
                    </th>
                    <th style="text-align:center" colspan = "2">
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </th>
                </tr>
                <tr>
                    <th style="text-align:center">Tuberias Identificadas</th>
                    <th style="text-align:center" class="bg-success">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck55">
                            <label class="custom-control-label" for="customCheck55">Si</label>
                        </div>
                    </th>
                    <th style="text-align:center" class="bg-danger">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck56">
                            <label class="custom-control-label" for="customCheck56">NO</label>
                        </div>
                    </th>
                    <th style="text-align:center" class="bg-success">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck57">
                            <label class="custom-control-label" for="customCheck57">SI</label>
                          </div>
                    </th>
                    <th style="text-align:center" class="bg-danger">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck58">
                            <label class="custom-control-label" for="customCheck58">NO</label>
                        </div>
                    </th>
                    <th style="text-align:center" colspan = "2">
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </th>
                </tr>
                <tr>
                    <th style="text-align:center">Centro de Carga</th>
                    <th style="text-align:center" class="bg-success">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck59">
                            <label class="custom-control-label" for="customCheck59">Si</label>
                        </div>
                    </th>
                    <th style="text-align:center" class="bg-danger">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck60">
                            <label class="custom-control-label" for="customCheck60">NO</label>
                        </div>
                    </th>
                    <th style="text-align:center" class="bg-success">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck61">
                            <label class="custom-control-label" for="customCheck61">SI</label>
                          </div>
                    </th>
                    <th style="text-align:center" class="bg-danger">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck62">
                            <label class="custom-control-label" for="customCheck62">NO</label>
                        </div>
                    </th>
                    <th style="text-align:center" colspan = "2">
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </th>
                </tr>
                <tr>
                    <th style="text-align:center">Rampa para Personas de Capacidades Diferentes</th>
                    <th style="text-align:center" class="bg-success">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck63">
                            <label class="custom-control-label" for="customCheck63">Si</label>
                        </div>
                    </th>
                    <th style="text-align:center" class="bg-danger">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck64">
                            <label class="custom-control-label" for="customCheck64">NO</label>
                        </div>
                    </th>
                    <th style="text-align:center" class="bg-success">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck65">
                            <label class="custom-control-label" for="customCheck65">SI</label>
                          </div>
                    </th>
                    <th style="text-align:center" class="bg-danger">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck66">
                            <label class="custom-control-label" for="customCheck66">NO</label>
                        </div>
                    </th>
                    <th style="text-align:center" colspan = "2">
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </th>
                </tr>
                <tr>
                    <th style="text-align:center" colspan = "7" class="table-dark">General</th>
                </tr>
                <tr>
                    <th style="text-align:center">Agua Corriente</th>
                    <th style="text-align:center" colspan = "2"></th>
                    <th style="text-align:center" class="bg-success">
                        <div class="custom-control custom-checkbox custom-control-inline">
                            <input type="checkbox" class="custom-control-input" id="customCheck67">
                            <label class="custom-control-label" for="customCheck67">SI</label>
                        </div>
                    </th>
                    <th style="text-align:center" class="bg-danger">
                        <div class="custom-control custom-checkbox custom-control-inline">
                            <input type="checkbox" class="custom-control-input" id="customCheck68">
                            <label class="custom-control-label" for="customCheck68">NO</label>
                        </div>
                    </th>
                    <th style="text-align:center" colspan = "4">
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </th>
                </tr>
                <tr>
                    <th style="text-align:center">Control Maestro de Energia Electrica</th>
                    <th style="text-align:center" class="bg-success">
                        <div class="custom-control custom-checkbox custom-control-inline">
                            <input type="checkbox" class="custom-control-input" id="customCheck69">
                            <label class="custom-control-label" for="customCheck69">SI</label>
                        </div>
                    </th>
                    <th style="text-align:center" class="bg-danger">
                        <div class="custom-control custom-checkbox custom-control-inline">
                            <input type="checkbox" class="custom-control-input" id="customCheck70">
                            <label class="custom-control-label" for="customCheck70">NO</label>
                        </div>
                    </th>
                    <th style="text-align:center" class="bg-success">
                        <div class="custom-control custom-checkbox custom-control-inline">
                            <input type="checkbox" class="custom-control-input" id="customCheck71">
                            <label class="custom-control-label" for="customCheck71">SI</label>
                        </div>
                    </th>
                    <th style="text-align:center" class="bg-danger">
                        <div class="custom-control custom-checkbox custom-control-inline">
                            <input type="checkbox" class="custom-control-input" id="customCheck72">
                            <label class="custom-control-label" for="customCheck72">NO</label>
                        </div>
                    </th>
                    <th style="text-align:center" colspan = "2">
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </th>
                </tr>
                <tr>
                    <th style="text-align:center">Control Maestro Suministro de Gas</th>
                    <th style="text-align:center" class="bg-success">
                        <div class="custom-control custom-checkbox custom-control-inline">
                            <input type="checkbox" class="custom-control-input" id="customCheck73">
                            <label class="custom-control-label" for="customCheck73">SI</label>
                        </div>
                    </th>
                    <th style="text-align:center" class="bg-danger">
                        <div class="custom-control custom-checkbox custom-control-inline">
                            <input type="checkbox" class="custom-control-input" id="customCheck74">
                            <label class="custom-control-label" for="customCheck74">NO</label>
                        </div>
                    </th>
                    <th style="text-align:center" class="bg-success">
                        <div class="custom-control custom-checkbox custom-control-inline">
                            <input type="checkbox" class="custom-control-input" id="customCheck75">
                            <label class="custom-control-label" for="customCheck75">SI</label>
                        </div>
                    </th>
                    <th style="text-align:center" class="bg-danger">
                        <div class="custom-control custom-checkbox custom-control-inline">
                            <input type="checkbox" class="custom-control-input" id="customCheck76">
                            <label class="custom-control-label" for="customCheck76">NO</label>
                        </div>
                    </th>
                    <th style="text-align:center" colspan = "2">
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </th>
                </tr>
                <tr>
                    <th style="text-align:center">Drenaje</th>
                    <th style="text-align:center" colspan = "2"></th>
                    <th style="text-align:center" class="bg-success">
                        <div class="custom-control custom-checkbox custom-control-inline">
                            <input type="checkbox" class="custom-control-input" id="customCheck77">
                            <label class="custom-control-label" for="customCheck77">SI</label>
                        </div>
                    </th>
                    <th style="text-align:center" class="bg-danger">
                        <div class="custom-control custom-checkbox custom-control-inline">
                            <input type="checkbox" class="custom-control-input" id="customCheck78">
                            <label class="custom-control-label" for="customCheck78">NO</label>
                        </div>
                    </th>
                    <th style="text-align:center" colspan = "4">
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </th>
                </tr>
                <tr>
                    <th style="text-align:center">Iluminacion</th>
                    <th style="text-align:center" colspan = "2"></th>
                    <th style="text-align:center" class="bg-success">
                        <div class="custom-control custom-checkbox custom-control-inline">
                            <input type="checkbox" class="custom-control-input" id="customCheck79">
                            <label class="custom-control-label" for="customCheck79">SI</label>
                        </div>
                    </th>
                    <th style="text-align:center" class="bg-danger">
                        <div class="custom-control custom-checkbox custom-control-inline">
                            <input type="checkbox" class="custom-control-input" id="customCheck80">
                            <label class="custom-control-label" for="customCheck80">NO</label>
                        </div>
                    </th>
                    <th style="text-align:center" colspan = "4">
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </th>
                </tr>
                <tr>
                    <th style="text-align:center">Sistema de Ventilacion/Extraccion Adecuado</th>
                    <th style="text-align:center" colspan = "2"></th>
                    <th style="text-align:center" class="bg-success">
                        <div class="custom-control custom-checkbox custom-control-inline">
                            <input type="checkbox" class="custom-control-input" id="customCheck81">
                            <label class="custom-control-label" for="customCheck81">SI</label>
                        </div>
                    </th>
                    <th style="text-align:center" class="bg-danger">
                        <div class="custom-control custom-checkbox custom-control-inline">
                            <input type="checkbox" class="custom-control-input" id="customCheck82">
                            <label class="custom-control-label" for="customCheck82">NO</label>
                        </div>
                    </th>
                    <th style="text-align:center" colspan = "4">
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </th>
                </tr>
                <tr>
                    <th style="text-align:center" colspan = "7" class="table-dark">Normas para Cumplir</th>
                </tr>
                <tr>
                    <th style="text-align:center">NOM 026 STPS (Señaleticas)</th>
                    <th style="text-align:center" colspan = "2"></th>
                    <th style="text-align:center" class="bg-success">
                        <div class="custom-control custom-checkbox custom-control-inline">
                            <input type="checkbox" class="custom-control-input" id="customCheck83">
                            <label class="custom-control-label" for="customCheck83">SI</label>
                        </div>
                    </th>
                    <th style="text-align:center" class="bg-danger">
                        <div class="custom-control custom-checkbox custom-control-inline">
                            <input type="checkbox" class="custom-control-input" id="customCheck84">
                            <label class="custom-control-label" for="customCheck84">NO</label>
                        </div>
                    </th>
                    <th style="text-align:center" colspan = "4">
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </th>
                </tr>
                <tr>
                    <th style="text-align:center">NOM-002-2010-STPS, NOM-154-2005-SCFI</th>
                    <th style="text-align:center" colspan = "2"></th>
                    <th style="text-align:center" class="bg-success">
                        <div class="custom-control custom-checkbox custom-control-inline">
                            <input type="checkbox" class="custom-control-input" id="customCheck85">
                            <label class="custom-control-label" for="customCheck85">SI</label>
                        </div>
                    </th>
                    <th style="text-align:center" class="bg-danger">
                        <div class="custom-control custom-checkbox custom-control-inline">
                            <input type="checkbox" class="custom-control-input" id="customCheck86">
                            <label class="custom-control-label" for="customCheck86">NO</label>
                        </div>
                    </th>
                    <th style="text-align:center" colspan = "4"><input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></th>
                </tr>
            </tbody>
        </table>
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