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
                <li><a href="/altausuario">Crear nuevo usuario</a></li>
            </ul>
        </nav>
    </header>
    <br><br>
    <h2 class="text-info">USUARIOS REGISTRADOS</h2>
    <br><br>

    <!-- <h5 class="text-uppercase alert-warning">Mensaje</h5> -->

    <table class="table table-responsive table-striped">
        <thead class="text-light">
        <tr>
            <th>Nombre de usuario</th>
            <th>Nombre</th>
            <th>Primer apellido</th>
            <th>Segundo apellido</th>
            <th>Tipo usuario</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($pacientes as $paciente)
            <a> <tr>
                    <form action="{{route('pacientes.destroy', $paciente->id)}}" method="POST">
                        @csrf
                        @method('PATCH')
                    <td>{{$paciente->nom_usuario}}</td>
                    <td>{{$paciente->nombre}}</td>
                    <td>{{$paciente->apellido1}}</td>
                    <td>{{$paciente->apellido2}}</td>
                    <td>Paciente</td>
                        <td>
                            <button type="submit" class="btn btn-outline-danger">Eliminar</button>
                        </td>
                    </form></tr></a>
        @endforeach
        @foreach($especialistas as $especialista)
            <a> <tr>
                    <form action="" method="POST">
                        @csrf
                        @method('PATCH')
                    <td>{{$especialista->nom_usuario}}</td>
                    <td>{{$especialista->nombre}}</td>
                    <td>{{$especialista->apellido1}}</td>
                    <td>{{$especialista->apellido2}}</td>
                    <td>Especialista</td>
                    <td>
                        <button type="submit" class="btn btn-outline-danger">Eliminar</button>
                    </td>
                    </form></tr></a>
        @endforeach
        @foreach($secretarios as $secretario)
            <a> <tr>
                    <form action="" method="POST">
                        @csrf
                        @method('PATCH')
                    <td>{{$secretario->nom_usuario}}</td>
                    <td>{{$secretario->nombre}}</td>
                    <td>{{$secretario->apellido1}}</td>
                    <td>{{$secretario->apellido2}}</td>
                    <td>Secretario</td>
                    <td>
                        <button type="submit" class="btn btn-outline-danger">Eliminar</button>
                    </td>
                    </form></tr></a>
        @endforeach
        </tbody>
    </table>
    <br>
</div>
<br>

<div class="footer">
    <p>Gabinete Privado de Psicología y Psiquiatría. Copyright © 2021. Todos los derechos reservados.</p>
</div>
</body>

</html>
