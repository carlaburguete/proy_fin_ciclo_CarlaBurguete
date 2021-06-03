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
                <li><a href="{{route('pacientes.edit', [$paciente])}}">Datos personales</a></li>
                <li><a href="{{route('agendarcita', [$paciente])}}">Agendar cita</a></li>
                <li><a href="{{route('citaspaciente', [$paciente])}}">Histórico de citas</a></li>
            </ul>
        </nav>
    </header>
    <br><br>
    <h2 class="text-info">DATOS PERSONALES</h2>
    <br>


    <form action="{{route('pacientes.update', $paciente)}}" method="POST">
        @csrf
            @method("PATCH")
        <div class="form-group">
            <label for="nombre">Nombre de usuario*</label>
            <input type="text" class="form-check col-10" name="nom_usuario" value="{{$paciente->nom_usuario}}"><br>

            <label for="nombre">Password*</label>
            <input type="text" class="form-check col-10" name="password" value="{{$paciente->password}}"><br>

            <label for="nombre">Nombre*</label>
            <input type="text" class="form-check col-10" name="nombre" value="{{$paciente->nombre}}"><br>

            <label for="primerapellido">Primer apellido*</label>
            <input type="text" class="form-check col-10" name="apellido1" value="{{$paciente->apellido1}}"><br>

            <label for="segundoapellido">Segundo apellido</label>
            <input type="text" class="form-check col-10" name="apellido2"
                   value="{{$paciente->apellido2}}"><br>

            <label for="dni">DNI / NIE *</label>
            <input type="text" class="form-check col-10" name="dni" value="{{$paciente->dni}}"><br>

            <label for="tlf">Teléfono*</label>
            <input type="text" class="form-check col-10" name="telefono" value="{{$paciente->telefono}}"><br>

            <label for="direccion">Dirección*</label>
            <input type="text" class="form-check col-10" name="direccion" value="{{$paciente->direccion}}"><br>

            <label for="localidad">Localidad*</label>
            <input type="text" class="form-check col-10" name="localidad" value="{{$paciente->localidad}}"><br>

            <label for="provincia">Provincia*</label>
            <input type="text" class="form-check col-10" name="provincia" value="{{$paciente->provincia}}"><br>

            <label for="cp">Código postal*</label>
            <input type="text" class="form-check col-10" name="cp" value="{{$paciente->cp}}"><br>

            <label for="tlfemergencia">Número de emergencia</label>
            <input type="text" class="form-check col-10" name="num_emergencia" value="{{$paciente->num_emergencia}}"><br>

            <label for="email">Correo electrónico*</label>
            <input type="email" class="form-check col-10" name="email" value="{{$paciente->email}}"><br>

            <label for="fechanacimiento">Fecha de nacimiento*</label>
            <input type="text" class="form-check col-10" name="f_nacimiento"
                   value="{{$paciente->f_nacimiento}}"><br>
        </div>
        <button type="submit" class="btn btn-outline-primary">GUARDAR</button>
    </form>
</div>
<div class="footer">
    <p>Gabinete Privado de Psicología y Psiquiatría. Copyright © 2021. Todos los derechos reservados.</p>
</div>
</body>

</html>
