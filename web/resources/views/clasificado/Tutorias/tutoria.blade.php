<div class="col-md-10 blogShort">
        <h4>{{isset($titulo)?$titulo:null}}</h4>
        <img src="{{isset($imagen)?$imagen:null}}"  class="pull-left img-responsive thumb margin10 img-thumbnail">

        <article><p>
          <label>Costo: {{isset($costo)?$costo:null}}</label>
          <br>
          <label>Descripcion: {{isset($descripcion)?$descripcion:null}}</label>
            </p></article>
  @include('clasificado.Anuncios.modal', $data=['btn_nombre'=>'ver detalles','id_modal'=>'anun'.$id,'title'=>'DETALLES DE  LA TUTORIS ','vista'=>'clasificado.Tutorias.detalle'])

</div>
