<html>
<head>
    <link rel="stylesheet" href="{{asset ('../css/app.css')}}">
    <title>Citas personales</title>
</head>
<body>
<div class="container">
    <header>
        <div class="iconosheader">
            <i class="fa fa-user">usuarioPaciente</i>
            <a class="btn btn-dark" href="/login">
                <i class="fa fa-lock">Cerrar sesión</i>
            </a><br>

        </div>
        <h1 class="text-dark text-left font-weight-bold">Gabinete privado - Carla Burguete</h1>
        <nav class="text-info font-weight-light">
            <ul>
                <li><a href="/citaspersonales">Agendar cita</a></li>
                <li><a href="/historicopersonal">Histórico de citas</a></li>
            </ul>
        </nav>
    </header>
    <br><br>
    <h2 class="text-info">AGENDAR CITA</h2>
    <br>
    <p>Paciente: {{$pacientes[0]->nombre}} {{$pacientes[0]->apellido1}}</p>
    <p>Especialista: Dr. Cepeda</p>
    <p>Categoría: Psicólogo</p>

    <br>
    <h3 class="text-info">CITAS DISPONIBLES</h3>

    <table class="table table-responsive table-striped">
        <thead class="text-light">
        <tr>
            <th>Fecha</th>
            <th>Psicólogo/Psiquiatra</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($citas as $cita)
                    <tr>
                        <form action="{{route('citaspersonales.modificarCita')}}" method="POST">
                            @csrf
                            @method('PATCH')
                    <td>{{$cita->fecha}}</td>
                    <td>{{$cita->nom_usuario_especialista}}</td>
                            <input type="hidden" name="id" value="{{$cita->id}}">
                    <td>
                          <button type="submit" class="btn btn-outline-success">Reservar</button>
                    </td>
                        </form>
                </tr>
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
