<html>
<head>
    <link rel="stylesheet" href="{{asset ('../css/app.css')}}">
    <title>Usuarios registrados</title>
</head>
<body>
<div class="container">
    <header>
        <div class="iconosheader">
            <i class="fa fa-user text-right">usuarioAdministrador</i>
            <a class="btn btn-dark" href="/login">
                <i class="fa fa-lock text-right">Cerrar sesión</i>
            </a><br>
        </div>

        <h1 class="text-dark text-left font-weight-bold">Panel de administración</h1>
        <nav class="text-info font-weight-light">
            <ul>
                <li><a href="/listausuarios">Ver usuarios registrados</a></li>
                <li><a href="/crearusuario">Crear nuevo usuario</a></li>
            </ul>
        </nav>
    </header>
    <br><br>
    <h2 class="text-info">CREAR USUARIO</h2>
    <br><br>
    <form action="{{route('crearusuario')}}" method="POST">
        @csrf
        @method('POST')
        <div class="form-group">
            <label for="nom_usuario">Nombre de usuario*</label>
            <input type="text" class="form-check col-10" name="nom_usuario" value=""><br>

            <label for="password">Password*</label>
            <input type="text" class="form-check col-10" name="password" value=""><br>

            <label for="nombre">Nombre*</label>
            <input type="text" class="form-check col-10" name="nombre" value=""><br>

            <label for="primerapellido">Primer apellido*</label>
            <input type="text" class="form-check col-10" name="apellido1" value=""><br>

            <label for="segundoapellido">Segundo apellido*</label>
            <input type="text" class="form-check col-10" name="apellido2" value=""><br>

            <input type="radio" name="rol" value="secretario">
            <label for="rol">Usuario Secretaría</label>
            <input type="radio" name="rol" value="especialista">
            <label for="rol">Usuario Especialista</label>

        </div>
        <button type="submit" class="btn btn-outline-primary">GUARDAR</button>
    </form>
    <br>
</div>
<br>

<div class="footer">
    <p>Gabinete Privado de Psicología y Psiquiatría. Copyright © 2021. Todos los derechos reservados.</p>
</div>
</body>

</html>

