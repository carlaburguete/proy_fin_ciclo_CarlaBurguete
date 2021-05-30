<html>
<head>
    <link rel="stylesheet" href="{{asset ('../css/app.css')}}">
    <title>Listado general</title>
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
    <h2 class="text-info">LISTADO GENERAL DE PACIENTES</h2>
    <br><br>
    <div class="buscador">
        <input type="search" placeholder="Escribe el nombre del paciente" name="busquedacodigo" size="40" maxlength="100">
    </div>
    <br><br>

           <!-- <h5 class="text-uppercase alert-warning"></h5> -->

    <table class="table table-responsive table-striped">
        <thead class="text-light">
        <tr>
            <th>Nombre</th>
            <th>DNI</th>
            <th>Psicólogo/Psiquiatra</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($pacientes as $paciente)
            <a> <tr>
                    <td>{{$paciente->nombre}}</td>
                    <td>{{$paciente->dni}}</td>
                    @php
                        $numEsp = random_int(1, 9);
                    @endphp
                    <td>{{$especialistas[$numEsp]->nombre}}</td>
                    <td>
                        <a class="btn btn-outline-success" href="{{route('historialPaciente',$paciente->id)}}">Seleccionar</a>
                    </td>
                </tr></a>
        @endforeach
        </tbody>
    </table>
    <br>
</div>
<div class="footer">
    <p>Gabinete Privado de Psicología y Psiquiatría. Copyright © 2021. Todos los derechos reservados.</p>
</div>
</body>
</html>
