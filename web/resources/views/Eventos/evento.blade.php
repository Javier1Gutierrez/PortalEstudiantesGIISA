<div class="container">
    <div class="row">
            <div class="card">
                <div class="card-body d-flex">
                    <div class="col-md-8 px-3">
                        <h5 class="card-title">{{isset($titulo)?$titulo:null}}</h5>
                        <p class="card-text">Lugar: {{isset($lugar)?$lugar:null}}</p>
                        <p class="card-text">Descripcion: {{isset($descripcion)?$descripcion:null}}</p>
                        @include('clasificado.Anuncios.modal', $data=['btn_nombre'=>'ver detalles','id_modal'=>'anun'.$id,'title'=>'Detalle del evento','vista'=>'Eventos.detalle'])
                    </div>
                    <div class="text-right"  width="400px">
                        <img src="/imagenes/evento/{{isset($imagen)?$imagen:null}}" 
                        class="pull-left img-responsive thumb margin10 img-thumbnail rounded">
                    </div>
                </div>
            </div>
    </div>
</div>









