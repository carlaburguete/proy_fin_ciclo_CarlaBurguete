@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <br><br>
                <div class="centrarimagen">
                    <img
                        src="https://www.freelogoservices.com/api/main/images/1j+ojFVDOMkX9Wytexe43D6khveIqRBNkRrNwXs1M3EMoAJtliEkjvRr8fk9">
                </div>
                <br>
                <div class="card"><br>
                    <div class="card-header-tabs text-center text-info">INICIAR SESIÓN</div>
                    <br>
                    <div class="card-body">
                        <form method="POST" action="{{route('validaUsuario')}}">
                            @csrf
                            @method('POST')
                            <div class="form-group row">
                                <label for="nom_usuario" class="col-md-4 col-form-label text-md-right">Usuario</label>

                                <div class="col-md-6">
                                    <input id="text" type="text" class="form-control-file" name="nom_usuario" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control-file " name="password"
                                           required>
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-info">
                                        ENVIAR
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
