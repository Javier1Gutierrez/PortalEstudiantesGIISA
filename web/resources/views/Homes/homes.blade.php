@extends('layouts.app')

@section('title','Portal Estudiantil - UTP')

@section('content')
<div class="container">
        
@include('Homes.carousel')

<br><br>
<div class="justify-content-center">
<div id="evento" >
        <div class=" col-xs-12 col-lg-12">
            
                <div class="card text-center border-primary mb-3"><h4> Eventos </h4></div>
             
             @isset($datosE)
             
                 @foreach ($datosE  as $data)
            
                        @include('Eventos.evento', $data)
               
                 @endforeach
          
             @endisset
           
            
        </div>
    </div>
</div>
    <br>
    <br>
 <div class="justify-content-center">
<div id="bolsatrabajo" >
        <div class=" col-xs-12 col-lg-12  ">
            
                <div class="card text-center border-primary mb-3r"><h4> Bolsa de Trabajo </h4></div>
             @isset($datosB)
             
                 @foreach ($datosB as $data)
                
                        @include('Bolsatrabajos.bolsatrabajo', $data)
               
                 @endforeach
          
             @endisset
           
            
        </div>
    </div>

</div>

        <br><br>
        <h1 class=" text-center">Clasificados</h1>
        <br>
   <div class=" row justify-content-center">

        <div id="compraventa" >
            <div class=" col-xs-12 col-lg-12">
                <div class="card ">
                    <div class="card-header text-center"><h4> Compra/Venta</h4></div>
                 @isset($datosC)
                 
                     @foreach ($datosC as $data)
                    
                     <div class="col-md-10 card m-4 p-5">

                            @include('Homes.publicaciones', $data)
                    </div>
                     @endforeach
              
                 @endisset
               
                </div>
            </div>
        </div>
  
              <div id="tutorias" >
                  <div class=" col-xs-4 col-lg-4 ">
                      <div class="card ">
                          <div class="card-header text-center"><h4> Tutorías</h4></div>
                       @isset($datosT)
                       
                           @foreach ($datosT as $data)
                          
                                  @include('clasificado.Tutorias.tutoria', $data)
                        
                           @endforeach
                   
                       @endisset
                      </div>
                  </div>
              </div>
              
              <div id="alquilerhospedaje" >
                    <div class=" col-xs-12 col-lg-12">
                        <div class="card ">
                            <div class="card-header"><h4> Alquiler/Hospedaje</h4></div>
                         @isset($datosH)
                         
                             @foreach ($datosH as $data)
                        
                             <div class="col-md-10 card m-4 p-5">
        
                                    @include('Homes.publicaciones', $data)
                            </div>
                             @endforeach
                    
                         @endisset
                         
                        </div>
                    </div>
                </div>

     </div>
</div>


@endsection
