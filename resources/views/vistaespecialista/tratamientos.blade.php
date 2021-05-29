<html>
<head>
    <link rel="stylesheet" href="{{asset ('../css/app.css')}}">
    <script>
        function cambiarAtributo(){
            var textarea = document.getElementById('textarea');
            textarea.removeAttribute('readonly');
        }

    </script>
    <title>Tratamientos</title>
</head>
<body>
<div class="container">
    <header>
        <div class="iconosheader">
            <i class="fa fa-user">usuarioEspecialista</i>
            <a class="btn btn-dark" href="/login">
                <i class="fa fa-lock">Cerrar sesión</i>
            </a><br>
        </div>

        <h1 class="text-dark text-left font-weight-bold">Gabinete privado - Especialista</h1>
        <nav class="text-info font-weight-light">
            <ul>
                <li><a href="/listapacientes">Seleccionar otro paciente</a></li>
                <li><a href="/historial">Historial</a></li>
                <li><a href="/tratamientos">Tratamientos</a></li>
                <li><a href="/evolucion">Evolución</a></li>
            </ul>
        </nav>
    </header>


    <br><br>
<h2 class="text-info">TRATAMIENTOS PACIENTE: {{$paciente->nombre}}</h2>
    <br>

    <a class="btn btn-outline-info" id="botonEditar" onclick="cambiarAtributo()">
        <i class="fa fa-edit">Editar</i>
    </a><br><br>
    <form action="{{route('editarTratamiento')}}" method="POST">
        @csrf
    <textarea cols="130" rows="10" name="textareaTratamiento" readonly>{{$paciente->tratamiento}}</textarea>
    <br><br>
    <button type="submit" class="btn btn-outline-primary">GUARDAR</button>
    <br><br>
        <input type="hidden" name="id" value="{{$paciente->id}}">
    </form>
</div>
<div class="footer">
    <p>Gabinete Privado de Psicología y Psiquiatría. Copyright © 2021. Todos los derechos reservados.</p>
</div>
</body>

</html>

