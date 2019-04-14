@extends('layouts.auth')

@section('title','Crear Nueva Cuenta')

@section('content')
<script  src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E=" crossorigin="anonymous"></script>
<div class="container-fluid h-100 bg-light">
    <div class="row h-100 justify-content-center align-items-center">
        <form method="POST" action="{{ route('register') }} " enctype="multipart/form-data">
            @csrf
             <!-- Título del Form -->
             <h3 class="text-center">Registro</h3>

             <div class="form-group">
                <label for="sede" class="col-form-label text-md-right">{{ __('Sede') }}</label>
                <select id="sede" class="form-control" name="sede" required>
                    <option value="Azuero">Azuero</option>
                    <option>Bocas del Toro</option>
                    <option>Chiriquí</option>
                    <option>Coclé</option>
                    <option>Colón</option>
                    <option>Panamá Oeste</option>
                    <option>Veraguas</option>
                </select>
                @if ($errors->has('sede'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('sede') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group">
                <label for="facultad" class="col-form-label text-md-right">{{ __('Facultad') }}</label>
                <select id="facultad" class="form-control" name="facultad" style="width:500px">
                  <option disabled selected>--- Facultad ---</option>
                  @foreach ($facultades as $key => $value)
                  <option value="{{ $key }}">{{ $value }}</option>
                  @endforeach
                </select>
                @if ($errors->has('facultad'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('facultad') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group">
                <label for="carrera" class="col-form-label text-md-right">{{ __('Carrera') }}</label>
                <select id="carrera" class="form-control" name="carrera" >
                    <option disabled selected>--Carrera--</option>
                </select>
            </div>

            <!-- Input de Nombre -->
            <div class="form-group">
                <label for="nombre">{{ __('Nombre') }}</label>
                <input class="form-control" id="nombre" name="nombre" required focus>
            </div>

              <!-- Input de Apellido -->
              <div class="form-group">
                <label for="apellido">{{ __('Apellido') }}</label>
                <input class="form-control" id="apellido" name="apellido" required focus>
            </div>

            <label>{{ __('Sexo') }}</label> <br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="sexo" id="MasculinoRadio" value="Masculino">
                <label class="form-check-label" for="MasculinoRadio">Masculino</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="sexo" id="FemeninoRadio" value="Femenino">
                <label class="form-check-label" for="FemeninoRadio">Femenino</label>
            </div> <br><br>

            <!-- Input de Correo Universitario -->
            <div class="form-group">
                <label for="email">{{ __('Correo Institucional')}}</label>
                <input class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" name="email" aria-describedby="Correo Universitario" placeholder="nombre.apellido@utp.ac.pa" required autofocus>
                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>

            <!-- Input de Contraseña -->
            <div class="form-group">
                <label for="password">{{ __('Contraseña') }}</label>
                <input type="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" id="password" name="password" required autofocus>
                    @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif
            </div>

             <!-- Input de Contraseña -->
             <div class="form-group ">
                <label for="password-confirm">{{ __('Repetir Contraseña') }}</label>
                <input type="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" id="password-confirm" name="password_confirmation" required autofocus>
            </div>
            <!-- Carga de la Imagen
            <div class="form-group ">
               <label for="imagen">{{ __('Imagen') }}</label>
               <input type="file" name="imagen" class="form-control {{ $errors->has('imagen') ? ' is-invalid' : '' }}" id="imagen">
           </div><br>-->

            <!-- Botón de Registrarse -->
            <div class="form-group text-center">
                <button type="submit" class="btn btn-primary">
                    {{ __('Registrarse') }}
                </button>

            </div>

            <!-- Link de Formulario de Inicio de Sesión -->
            <div class="form-group text-center">
                @if (Route::has('login'))
                    ¿Ya tienes cuenta? <a href="{{ route('login') }}"> {{ __('Inicia Sesión') }}</a>
                @endif
            </div>

        </form>
    </div>
</div>

  <script type="text/javascript">
    $(document).ready(function ()
    {
          $('select[name="facultad"]').on('change',function(){
               var facultadID = jQuery(this).val();
               if(facultadID)
               {
                  $.ajax({
                     url : 'register/getcarreras/' +facultadID,
                     type : "GET",
                     dataType : "json",
                     success:function(data)
                     {
                        console.log(data);
                      $('select[name="carrera"]').empty();
                        $.each(data, function(key,value){

                           $('select[name="carrera"]').append('<option value="'+ key +'">'+ value +'</option>');
                        });
                     }
                  });
               }else{
                  $('select[name="carrera"]').empty();
               }
            });
    });
    </script>
