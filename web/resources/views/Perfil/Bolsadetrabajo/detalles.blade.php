@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h3 align="center">Editar Alquiler/Hospedaje</h3>
        <div class="form-group">
      </div>
    </div>
    <!--error  -->
    <form action="{{route('Perfil.update2',$datosT->id)}}" method="post" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <div class="container">
      <div class="row justify-content-center h-100 align-items-center">
      <div class="bg-light mx-2 col-sm8 col-md8 col-lg6 col-xl-7 rounded-lg ">
      <div class="row">
        <div class="col-md-12 d-flex justify-content-center">
          <img style=" width: 200px;height: 200px" src="/imagenes/clasificado/tutorias/{{$datosT->imagen}}"
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
          <strong>Título del alquiler/hospedaje:</strong>
          <input type="text" name="titulo" class="form-control" value="{{$datosT->titulo}}">
        </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
          <strong>Ubicación :</strong>
          <input type="text" name="materia" class="form-control" value="{{$datosT->ubicacion}}">
        </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
          <strong>Precio :</strong>
          <input type="text" name="materia" class="form-control" value="{{$datosT->precio}}">
        </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
          <strong>Estacionamiento :</strong>
          <input type="text" name="materia" class="form-control" value="{{$datosT->estacionamiento}}">
        </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
          <strong>Habitaciones :</strong>
          <input type="number" name="costo"  min="1" max="9999" step="0.01" class="form-control" value="{{$datosT->habitaciones}}">
        </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
          <strong>Baños :</strong>
          <input type="number" name="costo"  min="1" max="9999" step="0.01" class="form-control" value="{{$datosT->baños}}">
        </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
          <strong>Descripción :</strong>
          <textarea class="form-control" name="descripcion" rows="4" cols="80">{{$datosT->descripcion}}</textarea>
        </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
          <strong>Habilidades :</strong>
          <input type="text" name="materia" class="form-control" value="{{$datosT->habilidades}}">
        </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
          <strong>Fecha :</strong>
          <input type="text" name="ubicacion" class="form-control" value="{{$datosT->fecha}}">
        </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
          <strong>Nombre del contacto :</strong>
          <input type="text" name="celular" class="form-control" value="{{$datosT->nomb}}">
        </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
          <strong>Celular :</strong>
          <input type="text" name="celular" class="form-control" value="{{$datosT->celular}}">
        </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
          <strong>Email del contacto :</strong>
          <input type="text" name="celular" class="form-control" value="{{$datosT->email}}">
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
