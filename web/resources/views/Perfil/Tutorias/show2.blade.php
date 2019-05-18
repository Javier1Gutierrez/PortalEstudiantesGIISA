@extends('layouts.app')
@section('content')
<div class="container">
<div class="row justify-content-center h-100 align-items-center">
<div class="bg-light mx-2 col-sm8 col-md8 col-lg6 col-xl-7 rounded-lg ">
<div class="row">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3>Detalles de la Tutoría</h3>
        <hr>
      </div>
    </div>
    <img style=" width: 300px; " src="/imagenes/clasificados/tutorias/{{$datosT->imagen}}"
     class=" rounded float-right img-responsive thumb margin10 img-thumbnail" >
    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <strong>Título : </strong> {{$datosT->titulo}}
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <strong>Nombre del tutor : </strong> {{$datosT->nomtutor}}
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
        <strong>Materia :</strong> {{$datosT->materia}}
      </div>
    </div>
      <div class="col-md-12">
        <div class="form-group">
        <strong>Costo :</strong> {{$datosT->costo}}
      </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
        <strong>Ubicación :</strong> {{$datosT->ubicacion}}
      </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
        <strong>Descripción :</strong> {{$datosT->descripcion}}
      </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
        <strong>Celular :</strong> {{$datosT->celular}}
      </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
        <strong>Estado de la Tutoría :</strong> {{$datosT->estadoPost}}
      </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
        <strong>Nombre del Anunciante :</strong> {{$datosT->nombre}}
      </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
        <strong>Correo :</strong> {{$datosT->email}}
      </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
        <strong>Fue Anunciada el :</strong> {{$datosT->created_at->format('d/m/Y')}}
      </div>
      </div>
      <br>
      <div class="col-md-12">
        <a href="{{url('miPerfil')}}" class="btn btn-sm btn-success">Regresar</a>
      </div>
    </div>
  </div>
@endsection
