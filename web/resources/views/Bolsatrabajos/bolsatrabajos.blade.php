@extends('layouts.app')
@section('content')
<div class="container">

 
    <form action="/searchB" method="get" class="form-inline">
        <i class="fas fa-search" aria-hidden="true"></i>
        <input class="form-control form-control-sm ml-3 w-75" type="search" placeholder="Search" aria-label="Search"
        name="search" >
        <div class="form-group">
            <button type="submit" class="btn btn-success">Buscar</button>
        </div>
        
  </form>
  <br>
  @include('clasificado.Anuncios.modal', $data=['btn_nombre'=>'Agregar Empleo','id_modal'=>'mod1','title'=>'AGREGA EMPLEOS AQUI','vista'=>'Bolsatrabajos.formulario'])
  @if(count($errors) > 0)
  <div class="alert alert-danger">
  <ul>
  @foreach($errors->all() as $error)
  <li>{{$error}}</li>
  @endforeach
  </ul>
  </div>
  @endif

  <br><br>
  <br >
        <div id="tutorias" class="row justify-content-center">
            <div class="col-md-8">
                
                    <div class="card text-center border-primary mb-4"><h4> Bolsa de Trabajo</h4></div>
                 @isset($datos)
                     @foreach ($datos as $data)

                    
                   @include('Bolsatrabajos.bolsatrabajo', $data)
                    
                     @endforeach
                 @endisset


                    <div class="col-md-12 gap10"></div>
                
            </div>


        </div>

</div>

@endsection