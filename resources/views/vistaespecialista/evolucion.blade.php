<html>
<head>
    <link rel="stylesheet" href="{{asset ('../css/app.css')}}">
    <title>Evolución</title>
</head>
<body>
<div class="container">
    <header>
        <div class="iconosheader">
            <i class="fa fa-user">usuarioEspecialista</i>
            <a class="btn btn-dark" href="/login">
                <i class="fa fa-lock">Cerrar sesión</i>
            </a><br>
        </div>


    <h1 class="text-dark text-left font-weight-bold">Gabinete privado - Especialista</h1>
        <nav class="text-info font-weight-light">
            <ul>
                <li><a href="/listapacientes">Seleccionar otro paciente</a></li>
                <li><a href="/historial">Historial</a></li>
                <li><a href="/tratamientos">Tratamientos</a></li>
                <li><a href="/evolucion">Evolución</a></li>
            </ul>
        </nav>
    </header>

    <br><br>
<h2 class="text-info">EVOLUCIÓN</h2>
    <br>
    <h3 class="text-info">AÑADIR EVOLUCIÓN</h3>
    <textarea cols="130" rows="8"></textarea>
    <br><br>
    <button type="submit" class="btn btn-outline-primary">GUARDAR</button>
    <br><br>
    <hr>
    <br>
    <h3 class="text-info">EVOLUCIONES PASADAS</h3>
    <textarea cols="130" rows="8" readonly>08/01/2021
        Evolución: Paciente mejora levemente.</textarea>
    <br><br>
</div>
<div class="footer">
    <p>Gabinete Privado de Psicología y Psiquiatría. Copyright © 2021. Todos los derechos reservados.</p>
</div>
</body>
</html>




