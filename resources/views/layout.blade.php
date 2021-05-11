{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <style> 

        .active a {
            color: red;
            text-decoration:  none;
        }
     </style>
</head>
<body>
    <nav>
        <ul>
        <li class="{{ request()->routeIs('home') ? 'active': ''}}"> <a href="/">Home</a> </li>
            <li class="{{ request()->routeIs('actaAdmin') ? 'active': ''}}"> <a href="/actaAdmin">ActaAdmin</a></li>
            <li class="{{ request()->routeIs('alumnos') ? 'active': ''}}"><a href="/alumnos">Alumnos</a></li>
            <li class="{{ request()->routeIs('bicicleta') ? 'active': ''}}"><a href="/bicicleta">Bicicleta</a></li>
            <li class="{{ request()->routeIs('missedCrendential') ? 'active': ''}}"><a href="/missedCredential">MissedCredential</a></li>
            <li class="{{ request()->routeIs('eventoSocial') ? 'active': ''}}"><a href="/eventoSocial">EventoSocial</a></li>
            <li class="{{ request()->routeIs('falloCamara') ? 'active': ''}}"><a href="/falloCamara">FalloCamara</a></li>
            <li class="{{ request()->routeIs('historial') ? 'active': ''}}"><a href="/historial">Historial</a></li>
            <li class="{{ request()->routeIs('incendio') ? 'active': ''}}"><a href="/incendio">Incendio</a></li>
            <li class="{{ request()->routeIs('incidencia') ? 'active': ''}}"><a href="/incidencia">Incidencia</a></li>
            <li class="{{ request()->routeIs('incidente') ? 'active': ''}}"><a href="/incidente">Incidente</a></li>
            <li class="{{ request()->routeIs('paseSalida') ? 'active': ''}}"><a href="/paseSalida">PaseSalida</a></li>
            <li class="{{ request()->routeIs('respiracion') ? 'active': ''}}"><a href="/respiracion">Respiracion</a></li>
            <li class="{{ request()->routeIs('romperCandado') ? 'active': ''}}"><a href="/romperCandado">RomperCandado</a></li>
            <li class="{{ request()->routeIs('solicitudVideocamara') ? 'active': ''}}"><a href="/solicitudVideocamara">SolicitudVideocamara</a></li>
            <li class="{{ request()->routeIs('solicitudLabs') ? 'active': ''}}"><a href="/solicitudLabs">SolicitudLabs</a></li>
            <li class="{{ request()->routeIs('vistas') ? 'active': ''}}"><a href="/vistas">Vistas</a></li>
            <li class="{{ request()->routeIs('supervisionMods') ? 'active': ''}}"><a href="/supervisionMods">SupervisionMods</a></li>
    
        </ul>
    </nav>
    @yield('content')
    
</body>
</html> --}}

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
        <title>Menu | Servicios Generales</title>
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
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <h5 class="card-header">
                            <!--Notificacion-->
                            Pendientes de Mantenimiento <span class="badge badge-danger">4</span>
                        </h5>
                        <div class="card-body">
                            <h5 class="card-title">Aqui Podras...</h5>
                            <p class="card-text">Consultar todo lo referente a mantenimiento</p>
                            <a href="TablaMantenimiento" class="btn btn-primary btn-lg">Ir</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <h5 class="card-header">Reportes</h5>
                        <div class="card-body">
                            <h5 class="card-title">Aqui podras...</h5>
                            <p class="card-text">Crear, ver, modificar, eliminar, los reportes tanto de insidencias como de seguridad</p>
                            <a href="TablaReportes" class="btn btn-primary btn-lg">Ir</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <!--Pie de pagina-->
        <div align= "center">
            <h3>Menu</h3>
            <nav>
                <ul>
                <li class="{{ request()->routeIs('home') ? 'active': ''}}"> <a href="/">Home</a> </li>
                    <li class="{{ request()->routeIs('actaAdmin') ? 'active': ''}}"> <a href="/actaAdmin">ActaAdmin</a></li>
                    <li class="{{ request()->routeIs('alumnos') ? 'active': ''}}"><a href="/alumnos">Alumnos</a></li>
                    <li class="{{ request()->routeIs('bicicleta') ? 'active': ''}}"><a href="/bicicleta">Bicicleta</a></li>
                    <li class="{{ request()->routeIs('missedCrendential') ? 'active': ''}}"><a href="/missedCredential">MissedCredential</a></li>
                    <li class="{{ request()->routeIs('eventoSocial') ? 'active': ''}}"><a href="/eventoSocial">EventoSocial</a></li>
                    <li class="{{ request()->routeIs('falloCamara') ? 'active': ''}}"><a href="/falloCamara">FalloCamara</a></li>
                    <li class="{{ request()->routeIs('historial') ? 'active': ''}}"><a href="/historial">Historial</a></li>
                    <li class="{{ request()->routeIs('incendio') ? 'active': ''}}"><a href="/incendio">Incendio</a></li>
                    <li class="{{ request()->routeIs('incidencia') ? 'active': ''}}"><a href="/incidencia">Incidencia</a></li>
                    <li class="{{ request()->routeIs('incidente') ? 'active': ''}}"><a href="/incidente">Incidente</a></li>
                    <li class="{{ request()->routeIs('paseSalida') ? 'active': ''}}"><a href="/paseSalida">PaseSalida</a></li>
                    <li class="{{ request()->routeIs('respiracion') ? 'active': ''}}"><a href="/respiracion">Respiracion</a></li>
                    <li class="{{ request()->routeIs('romperCandado') ? 'active': ''}}"><a href="/romperCandado">RomperCandado</a></li>
                    <li class="{{ request()->routeIs('solicitudVideocamara') ? 'active': ''}}"><a href="/solicitudVideocamara">SolicitudVideocamara</a></li>
                    <li class="{{ request()->routeIs('solicitudLabs') ? 'active': ''}}"><a href="/solicitudLabs">SolicitudLabs</a></li>
                    <li class="{{ request()->routeIs('vistas') ? 'active': ''}}"><a href="/vistas">Vistas</a></li>
                    <li class="{{ request()->routeIs('supervisionMods') ? 'active': ''}}"><a href="/supervisionMods">SupervisionMods</a></li>
            
                </ul>
            </nav>
            @yield('content')
            <a class='btn btn-primary btn-danger btn-lg' href="">Cerrar Sesion</a>
        </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script>window.JQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/docs.min.js"></script>
    </body>
</html>