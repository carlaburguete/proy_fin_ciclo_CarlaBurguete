 @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <br><br>
            <div class="centrarimagen">
                <img src="https://www.freelogoservices.com/api/main/images/1j+ojFVDOMkX9Wytexe43D6khveIqRBNkRrNwXs1M3EMoAJtliEkjvRr8fk9">
            </div>
            <br>
            <div class="card"><br>
                <div class="card-header-tabs text-center text-info">INICIAR SESIÓN</div>
                <br>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="nom_usuario" class="col-md-4 col-form-label text-md-right">{{'Usuario'}}</label>

                            <div class="col-md-6">
                                <input id="text" type="text" class="form-control-file" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control-file @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-info">
                                    {{ __('ENVIAR') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-outline-info" href="{{ route('password.request') }}">
                                        {{ __('¿Has olvidado tu contraseña?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
