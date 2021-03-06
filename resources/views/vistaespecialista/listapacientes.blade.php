<html>
<head>
    <link rel="stylesheet" href="{{asset ('../css/app.css')}}">
    <title>Lista de pacientes</title>
</head>
<body>
<div class="container">
    <header>
        <div class="iconosheader">
            <i class="fa fa-user text-right">usuarioEspecialista</i>
            <a class="btn btn-dark" href="/login">
                <i class="fa fa-lock text-right">Cerrar sesión</i>
            </a><br>
        </div>

        <h1 class="text-dark text-left font-weight-bold">Gabinete privado - Especialista</h1>

    </header>
    <br><br>
    <h2 class="text-info">LISTADO DE PACIENTES</h2>
    <br><br>
    <div class="buscador">
        <input type="search" placeholder="Escribe el nombre del paciente" name="busquedacodigo" size="40"
               maxlength="100">
    </div>

    <br><br>

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
            <a>
                <tr>
                    <td>{{$paciente->nombre}} {{$paciente->apellido1}}</td>
                    <td>{{$paciente->dni}}</td>
                    @php
                        $numEsp = random_int(1, 9);
                    @endphp
                    <td>{{$especialistas[$numEsp]->nombre}} {{$especialistas[$numEsp]->apellido1}}</td>
                    <td>
                        <a class="btn btn-outline-success" href="{{route('historialPaciente',$paciente->id)}}">Seleccionar</a>
                    </td>
                </tr>
            </a>
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
