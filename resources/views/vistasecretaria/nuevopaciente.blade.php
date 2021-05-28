<html>
<head>
    <link rel="stylesheet" href="{{asset ('../css/app.css')}}">
    <title>Datos personales</title>
</head>
<body>
<div class="container">
    <header>
        <div class="iconosheader">
            <i class="fa fa-user text-right">usuarioSecretaria</i>
            <a class="btn btn-dark" href="/login">
                <i class="fa fa-lock text-right">Cerrar sesión</i>
            </a><br>
        </div>
        <h1 class="text-dark text-left font-weight-bold">Gabinete privado - Secretaría</h1>
        <nav class="text-info font-weight-light">
            <ul>
                <li><a href="/listadogeneral">Listado general</a></li>
                <li><a href="/historicocitas">Histórico de citas</a></li>
                <li><a href="/nuevopaciente">Alta nuevo paciente</a></li>
            </ul>
        </nav>
    </header>
    <br><br>
    <h2 class="text-info">ALTA DE NUEVO PACIENTE</h2>
    <br>

    <form action="" method="POST">

        <div class="form-group">
            <label for="nombre">Nombre*</label>
            <input type="text" class="form-check col-10" name="nombre" value=""><br>

            <label for="primerapellido">Primer apellido*</label>
            <input type="text" class="form-check col-10" name="primerapellido" value=""><br>

            <label for="segundoapellido">Segundo apellido</label>
            <input type="text" class="form-check col-10" name="segundoapellido" value=""><br>

            <label for="dni">DNI / NIE *</label>
            <input type="text" class="form-check col-10" name="dni" value=""><br>

            <label for="tlf">Teléfono*</label>
            <input type="text" class="form-check col-10" name="tlf" value=""><br>

            <label for="direccion">Dirección*</label>
            <input type="text" class="form-check col-10" name="direccion" value=""><br>

            <label for="localidad">Localidad*</label>
            <input type="text" class="form-check col-10" name="localidad" value=""><br>

            <label for="provincia">Provincia*</label>
            <input type="text" class="form-check col-10" name="provincia" value=""><br>

            <label for="cp">Código postal*</label>
            <input type="text" class="form-check col-10" name="cp" value=""><br>

            <label for="tlfemergencia">Número de emergencia</label>
            <input type="text" class="form-check col-10" name="tlfemergencia" value=""><br>

            <label for="email">Correo electrónico*</label>
            <input type="email" class="form-check col-10" name="email" value=""><br>

            <label for="fechanacimiento">Fecha de nacimiento*</label>
            <input type="email" class="form-check col-10" name="fechanacimiento" value=""><br>
        </div>
        <button type="submit" class="btn btn-outline-primary">GUARDAR</button>
    </form>
</div>
<div class="footer">
    <p>Gabinete Privado de Psicología y Psiquiatría. Copyright © 2021. Todos los derechos reservados.</p>
</div>
</body>

</html>
