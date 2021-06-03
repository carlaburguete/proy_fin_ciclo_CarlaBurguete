<html>
<head>
    <link rel="stylesheet" href="{{asset ('../css/app.css')}}">
    <title>Agendar cita</title>
</head>
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
    <h2 class="text-info">AGENDAR CITA</h2>
    <br>
    <p>Paciente: {{$paciente->nombre}} {{$paciente->apellido1}}</p>
    <p>Especialista: Marta Ballesteros Hijo</p>
    <p>Categoría: Psicólogo</p>

    <br>
    <h3 class="text-info">CITAS DISPONIBLES</h3>

    <table class="table table-responsive table-striped">
        <thead class="text-light">
        <tr>
            <th>Fecha y hora</th>
            <th>Psicólogo/Psiquiatra</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($citas as $cita)
            <tr>
                <form action="{{route('reservarCita')}}" method="POST">
                    @csrf
                    @method('PATCH')
                    <td>{{$cita->fecha}}</td>
                    <td>{{$cita->nom_usuario_especialista}}</td>
                    <input type="hidden" name="id" value="{{$cita->id}}">
                    <td>
                        <button type="submit" class="btn btn-outline-success">Reservar</button>
                        <input type="hidden" name="pacienteElegido" value="{{$paciente->id}}">
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

</html>
