<!-- PAGINA HOME DEL GABINETE -->
<html>
<head>
    <link rel="stylesheet" href="{{asset ('./css/app.css')}}">
    <title>HOME GABINETE</title>
</head>
<body bgcolor="white">
<br>
<div class="container">
    <div class="principal">
        <div class="col-12">
            <img src="https://www.freelogoservices.com/api/main/images/1j+ojFVDOMkX9Wytexe43D6khveIqRBNkRrNwXs1M3EMoAJtliEkjvRr8fk9">
            <br>
            <a class="btn btn-dark" href="/login">
                <i class="fa fa-user-lock"> GESTIÓN PRIVADA</i>
            </a><br>
            <hr>
            <br>
            <h2 class="text-info">SOBRE NOSOTROS</h2>
            <p>GABINETE PRIVADO DE PSICOLOGÍA Y PSIQUIATRÍA está dirigido por las psicólogas Elisa Múgica San Emeterio (colegiada A- 0000) y Rosana Bellosta Asín (colegiada A- 0001).
                Desde 1999 contamos con una amplia experiencia profesional dentro del mundo de la psicología con diversas especializaciones aplicadas a niños, adolescentes y adultos.</p>
            <br>
            <h2 class="text-info">NUESTROS SERVICIOS</h2>
            <ul id="lista" class="font-italic">
                <li>Terapia individual</li>
                <li>Terapia familiar</li>
                <li>Terapia de pareja</li>
                <li>Terapia de grupo</li>
                <li>Mindfulness</li>
                <li>Trastorno disociativo</li>
                <li>Terapia para adicciones</li>
                <li>Terapia de duelo</li>
                <li>Ludopatía</li>
                <li>Terapia sexual</li>
            </ul>
            <br>
            <h2 class="text-info">NUESTRO GABINETE</h2><br>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d47716.64445735491!2d-0.903248689383485!3d41.62785662793368!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd5914d99c1f6125%3A0xd1f5523b587f3709!2sGabinete%20De%20Psiquiatr%C3%ADa%2C%20Psicolog%C3%ADa%20y%20Psicoterapia%20de%20Zaragoza!5e0!3m2!1ses!2ses!4v1619803764753!5m2!1ses!2ses" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            <br><br>
            <h2 class="text-info">CONTACTO</h2>
            <p>Si quieres ponerte en contacto con nosotros en caso de cualquier duda o desear una cita puedes rellenar este formulario de contacto y te
                responderemos lo antes posible.</p>
            <form action="" method="POST">
                @csrf
                @method("PUT")
                <div class="form-group">
                    <label for="nombre">Nombre y apellidos</label>
                    <input type="text" class="form-check col-10" name="nombre" placeholder="Inserta nombre"><br>

                    <label for="dni">Asunto</label>
                    <input type="text" class="form-check col-10" placeholder="Asunto del mensaje"><br>

                    <label for="nombre">Mensaje </label>
                    <textarea class="form-check col-10" placeholder="Escribe tu mensaje"></textarea><br>

                    <label for="telefono">Teléfono</label>
                    <input type="text" class="form-check col-10" placeholder="Teléfono"><br>
                </div>
                <button type="submit" class="btn btn-outline-primary">ENVIAR MENSAJE</button>
            </form>

        </div>

    </div>

</div>

<div class="footer">
    <p>Gabinete Privado de Psicología y Psiquiatría. Copyright © 2021. Todos los derechos reservados.</p>
</div>

</body>

</html>





