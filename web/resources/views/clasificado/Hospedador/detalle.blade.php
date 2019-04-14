<div class="form-group row">
<div class="col-sm-8">
  #Detalles de Alquiler/Hospedaje
    <h4>{{isset($titulo)?$titulo:null}}</h4>
    <img src="{{isset($imagen)?$imagen:null}}"  class="pull-left img-responsive thumb margin10 img-thumbnail">
    <br>
    <label>Precio: {{isset($precio)?$precio:null}}</label>
    <br>
    <label>Ubicación: {{isset($ubicacion)?$ubicacion:null}}</label>
    <br>
    <label>Descripción: {{isset($descripcion)?$descripcion:null}}</label>
    <hr>

    <div class="col-sm-8">
    <p class="h5">Información de Contacto</p>
    <br>
      <label>Nombre del Contacto: {{isset($nombre)?$nombre:null}}</label>
      <br>
      <label>Celular: {{isset($celular)?$celular:null}}</label>
      <br>
      <label>Email: {{isset($email)?$email:null}}</label>

    </div>

</div>
</div>

<div class="modal-footer">
    <button type="submit" class="btn btn-success" data-dismiss="modal">Cerrar</button>
</div>
