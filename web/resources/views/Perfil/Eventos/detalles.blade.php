@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h3 align="center">Editar Evento</h3>
        <div class="form-group">
      </div>
    </div>
    <!--error  -->
    <form action="{{route('Perfil.updateE',$datosE->id)}}" method="post" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <div class="container">
      <div class="row justify-content-center h-100 align-items-center">
      <div class="bg-light mx-2 col-sm8 col-md8 col-lg6 col-xl-7 rounded-lg ">
      <div class="row">
        <div class="col-md-12 d-flex justify-content-center">
          <img style=" width: 200px;height: 200px" src="/imagenes/eventos/{{$datosE->imagen}}"
           class=" rounded float-right img-responsive thumb margin10 img-thumbnail" >
       </div>
       <br>
       <div class="col-md-12">
       <div class="form-group">
         <label for="imagen">Nueva Imagen</label>
         <input type="file" class="form-control-file" id="imagen" name="imagen" accept="image/*">
       </div>
       </div>
        <div class="col-md-12">
          <div class="form-group">
          <strong>Título del evento:</strong>
          <input type="text" name="titulo" class="form-control" value="{{$datosE->titulo}}">
        </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
          <strong>Fecha :</strong>
          <input type="text" name="fecha" class="form-control" value="{{$datosE->fecha}}">
        </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
          <strong>Lugar :</strong>
          <input type="text" name="lugar" class="form-control" value="{{$datosE->lugar}}">
        </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
          <strong>Costo :</strong>
          <input type="number" name="costo"  min="0" max="9999" step="0.01" class="form-control" value="{{$datosE->costo}}">
        </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
          <strong>Nombre de la Facultad :</strong>
          <input type="text" name="ubicacion" class="form-control" value="{{$datosE->facultad_nomb}}">
        </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
          <strong>Email :</strong>
          <input type="text" name="ubicacion" class="form-control" value="{{$datosE->email}}">
        </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
          <strong>Descripción :</strong>
          <textarea class="form-control" name="descripcion" rows="4" cols="80">{{$datosE->descripcion}}</textarea>
        </div>
        </div>


        <div class="col-md-12">
          <br>
          <button type="submit" class="btn btn-sm btn-warning">Actualizar</button>
          <a href="{{url('miPerfil')}}" class="btn btn-sm btn-danger">Regresar</a>
        </div>
      </div>
    </form>
  </div>
  </div>
  </div>
    @endsection
