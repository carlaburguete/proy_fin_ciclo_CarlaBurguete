<html>
<head>
    <link rel="stylesheet" href="{{asset ('../css/app.css')}}">
    <title>Citas paciente</title>
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
    <h2 class="text-info">CITAS DEL PACIENTE</h2>

    <br>
    <p>Paciente: {{$pacientes[0]->nombre}}</p>
    <p>Especialista: Dr. Cepeda</p>
    <p>Categoría: Psicólogo</p>

    <br>
    <h3 class="text-info">PRÓXIMAS CITAS</h3>
    <table class="table table-responsive table-striped">
        <thead class="text-light">
        <tr>
            <th>Fecha y hora</th>
            <th>Psicólogo/Psiquiatra</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>17/07/2021 16:30</td>
            <td>Dr. Cepeda</td>
            <td>
                <a class="btn btn-outline-danger" href="">
                    <i class="fa fa-trash-restore"></i>
                </a>
            </td>
        </tr>
        </tbody>
    </table>


    <br>
    <h3 class="text-info">CITAS ANTIGUAS</h3>

    <table class="table table-responsive table-striped">
        <thead class="text-light">
        <tr>
            <th>Fecha</th>
            <th>Hora</th>
            <th>Psicólogo/Psiquiatra</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>11/04/2021</td>
            <td>11:00-12:00</td>
            <td>Dr. Cepeda</td>
        </tr>
        <tr>
            <td>16/03/2021</td>
            <td>14:00-15:00</td>
            <td>Dr. Cepeda</td>
        </tr>
        <tr>
            <td>01/03/2021</td>
            <td>20:00-21:00</td>
            <td>Dr. Cepeda</td>
        </tr>
        <tr>
            <td>15/02/2021</td>
            <td>18:30-19:30</td>
            <td>Dr. Cepeda</td>
        </tr>
        <tr>
            <td>02/01/2021</td>
            <td>17:00-18:00</td>
            <td>Dr. Cepeda</td>
        </tr>
        </tbody>
    </table>
    <br>
</div>
<div class="footer">
    <p>Gabinete Privado de Psicología y Psiquiatría. Copyright © 2021. Todos los derechos reservados.</p>
</div>
</body>

</html>
