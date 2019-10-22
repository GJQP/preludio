@extends('layouts.vendor.auth')

@section('content')


    <div class="login-container" style="top: 25vh">

        <p>Registrarse</p>

        <form method="POST" action="{{action("Auth\RegisterController@register")}}">
            @csrf
            <p>Datos de Usuario</p>
            <div class="form-group form-group-default" id="nameGroup">
                <label for="name">Nombre</label>

                <div class="controls">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Nombre" required autocomplete="name" autofocus>

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group form-group-default" id="emailGroup">
                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo') }}</label>

                <div class="controls">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                           name="email" value="{{ old('email') }}"  placeholder="Correo" required autocomplete="email">

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group form-group-default" id="passwordGroup">
                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                <div class="controls">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group form-group-default" id="passwordConfirmGroup">
                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar contraseña') }}</label>

                <div class="controls">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
            </div>

            <p>Datos de Teatro</p>

            <div class="form-group form-group-default" id="nombreGroup">
                <label for="nombre">Nombre</label>

                <div class="controls">
                    <input id="nombre" type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" value="{{ old('nombre') }}" placeholder="Nombre" required autocomplete="nombre" autofocus>

                    @error('nombre')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group form-group-default" id="telefonoGroup">
                <label for="telefono" class="col-md-4 col-form-label text-md-right">Teléfono</label>

                <div class="controls">
                    <input id="telefono" type="tel" class="form-control @error('telefono') is-invalid @enderror"
                           name="telefono" value="{{ old('telefono') }}"  placeholder="04XXXXXXXXX" required
                           autocomplete="telefono">

                    @error('telefono')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group form-group-default" id="rifGroup">
                <label for="rif" class="col-md-4 col-form-label text-md-right">RIF</label>

                <div class="controls">
                    <input id="rif" type="text" class="form-control @error('rif') is-invalid @enderror"
                           name="rif" value="{{ old('rif') }}"  placeholder="J0XXXXXXX" required autocomplete="rif">

                    @error('rif')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group form-group-default" id="direccionGroup">
                <label for="direccion" class="col-md-4 col-form-label text-md-right">Dirección</label>

                <div class="controls">
                    <textarea id="direccion"  class="form-control @error('direccion') is-invalid @enderror"
                              name="direccion" value="{{ old('direccion') }}" required
                              autocomplete="direccion"></textarea>

                    @error('direccion')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary btn-block">
                        {{ __('Registrarse') }}
                    </button>
                </div>

                <a class="btn btn-link" href="{{ route('login') }}">
                    {{ __('¿Ya está registrado?') }}
                </a>
            </div>
        </form>

        <div style="clear:both"></div>

        @if(!$errors->isEmpty())
            <div class="alert alert-red">
                <ul class="list-unstyled">
                    @foreach($errors->all() as $err)
                        <li>{{ $err }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

    </div> <!-- .login-container -->
@endsection

@push('scripts')
    <script>
        var btn = document.querySelector('button[type="submit"]');
        var form = document.forms[0];
        var email = document.querySelector('[name="email"]');
        var password = document.querySelector('[name="password"]');
        var password_confirm = document.querySelector('[name="password_confirmation"]');
        var name = document.querySelector('[name="name"]');
        var nombre = document.querySelector('[name="nombre"]');
        var telefono = document.querySelector('[name="telefono"]');
        var direccion = document.querySelector('[name="direccion"]');
        var rif = document.querySelector('[name="rif"]');


        btn.addEventListener('click', function(ev){
            if (form.checkValidity()) {
                btn.querySelector('.signingin').className = 'signingin';
                btn.querySelector('.signin').className = 'signin hidden';
            } else {
                ev.preventDefault();
            }
        });
        email.focus();
        document.getElementById('emailGroup').classList.add("focused");

        // Focus events for email and password fields
        email.addEventListener('focusin', function(e){
            document.getElementById('emailGroup').classList.add("focused");
        });
        email.addEventListener('focusout', function(e){
            document.getElementById('emailGroup').classList.remove("focused");
        });

        password.addEventListener('focusin', function(e){
            document.getElementById('passwordGroup').classList.add("focused");
        });
        password.addEventListener('focusout', function(e){
            document.getElementById('passwordGroup').classList.remove("focused");
        });
        password_confirm.addEventListener('focusin', function(e){
            document.getElementById('passwordConfirmGroup').classList.add("focused");
        });
        password_confirm.addEventListener('focusout', function(e){
            document.getElementById('passwordConfirmGroup').classList.remove("focused");
        });
        nombre.addEventListener('focusin', function(e){
            document.getElementById('nombreGroup').classList.add("focused");
        });
        nombre.addEventListener('focusout', function(e){
            document.getElementById('nombreGroup').classList.remove("focused");
        });
        // name.addEventListener('focusin', function(e){
        //     document.getElementById('nameGroup').classList.add("focused");
        // });
        // name.addEventListener('focusout', function(e){
        //     document.getElementById('nameGroup').classList.remove("focused");
        // });
        direccion.addEventListener('focusin', function(e){
            document.getElementById('direccionGroup').classList.add("focused");
        });
        direccion.addEventListener('focusout', function(e){
            document.getElementById('direccionGroup').classList.remove("focused");
        });
        telefono.addEventListener('focusin', function(e){
            document.getElementById('telefonoGroup').classList.add("focused");
        });
        telefono.addEventListener('focusout', function(e){
            document.getElementById('telefonoGroup').classList.remove("focused");
        });
        rif.addEventListener('focusin', function(e){
            document.getElementById('rifGroup').classList.add("focused");
        });
        rif.addEventListener('focusout', function(e){
            document.getElementById('rifGroup').classList.remove("focused");
        });

    </script>
@endpush
