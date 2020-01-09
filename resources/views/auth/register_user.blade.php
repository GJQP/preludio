@extends('layouts.vendor.auth')

@section('content')

    <style>
        .invalid-feedback{
            color: red;
        }
        .is-invalid{
           border-color:red !important;
        }
    </style>

    <div class="login-container">

        <p>Registrarse</p>

        <form method="POST" action="{{action("Auth\RegisterController@register")}}">
            @csrf
            <p>Datos de Usuario</p>
            <div class="form-group form-group-default @error('name') is-invalid @enderror" id="nameGroup">
                <label for="name">Nombre</label>

                <div class="controls">
                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Nombre" required autocomplete="name" autofocus>

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group form-group-default  @error('email') is-invalid @enderror" id="emailGroup">
                <label for="email" >{{ __('Correo') }}</label>

                <div class="controls">
                    <input id="email" type="email" class="form-control"
                           name="email" value="{{ old('email') }}"  placeholder="Correo" required autocomplete="email">

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group form-group-default @error('password') is-invalid @enderror" id="passwordGroup">
                <label for="password" >{{ __('Contraseña') }}</label>

                <div class="controls">
                    <input id="password" type="password" class="form-control" name="password" required autocomplete="new-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group form-group-default" id="passwordConfirmGroup">
                <label for="password-confirm" >{{ __('Confirmar contraseña') }}</label>

                <div class="controls">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
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
