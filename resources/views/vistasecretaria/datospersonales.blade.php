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
                <li><a href="/datospersonales">Datos personales</a></li>
                <li><a href="/agendarcita">Agendar cita</a></li>
                <li><a href="/citaspaciente">Histórico de citas</a></li>
            </ul>
        </nav>
    </header>
<br><br>
    <h2 class="text-info">DATOS PERSONALES</h2>
    <br>
    <a class="btn btn-outline-info">
        <i class="fa fa-edit">Editar</i>
    </a><br><br>

        <form action="" method="POST">

            <div class="form-group">
                <label for="nombre">Nombre*</label>
                <input type="text" class="form-check col-10" name="nombre" value="{{$pacientes[0]->nombre}}"><br>

                <label for="primerapellido">Primer apellido*</label>
                <input type="text" class="form-check col-10" name="primerapellido" value="{{$pacientes[0]->apellido1}}"><br>

                <label for="segundoapellido">Segundo apellido</label>
                <input type="text" class="form-check col-10" name="segundoapellido" value="{{$pacientes[0]->apellido2}}"><br>

                <label for="dni">DNI / NIE *</label>
                <input type="text" class="form-check col-10" name="dni" value="{{$pacientes[0]->dni}}"><br>

                <label for="tlf">Teléfono*</label>
                <input type="text" class="form-check col-10" name="tlf" value="{{$pacientes[0]->telefono}}"><br>

                <label for="direccion">Dirección*</label>
                <input type="text" class="form-check col-10" name="direccion" value="{{$pacientes[0]->direccion}}"><br>

                <label for="localidad">Localidad*</label>
                <input type="text" class="form-check col-10" name="localidad" value="{{$pacientes[0]->localidad}}"><br>

                <label for="provincia">Provincia*</label>
                <input type="text" class="form-check col-10" name="provincia" value="{{$pacientes[0]->provincia}}"><br>

                <label for="cp">Código postal*</label>
                <input type="text" class="form-check col-10" name="cp" value="{{$pacientes[0]->cp}}"><br>

                <label for="tlfemergencia">Número de emergencia</label>
                <input type="text" class="form-check col-10" name="tlfemergencia" value="{{$pacientes[0]->num_emergencia}}"><br>

                <label for="email">Correo electrónico*</label>
                <input type="email" class="form-check col-10" name="email" value="{{$pacientes[0]->email}}"><br>

                <label for="fechanacimiento">Fecha de nacimiento*</label>
                <input type="email" class="form-check col-10" name="fechanacimiento" value="{{$pacientes[0]->f_nacimiento}}"><br>
            </div>
            <button type="submit" class="btn btn-outline-primary">GUARDAR</button>
        </form>
    </div>
<div class="footer">
    <p>Gabinete Privado de Psicología y Psiquiatría. Copyright © 2021. Todos los derechos reservados.</p>
</div>
</body>

</html>
