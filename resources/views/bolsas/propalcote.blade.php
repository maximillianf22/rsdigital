@extends('layout.index')

@section('title', 'Producto')

@section('style')
<style>
  .custom-control-input:checked~.custom-control-label:before {
    color: #fff !important;
    border-color: #ec0808 !important;
    background-color: #ec0808 !important;
    box-shadow: none !important;
}
</style>
@endsection

@section('content')
<div class="section section-item">
      <div class="container p-0">
        <!--Secction Priducto-->
        <section id="producto">
        <div class="row mr-5 ml-5">
          <div class="col-lg-5 col-md-5 ">
            <div id="productCarousel" class="carousel slide" data-ride="carousel" data-interval="8000">
              <ol class="carousel-indicators mt-5">
                <li data-target="#productCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#productCarousel" data-slide-to="1" class=""></li>
                <li data-target="#productCarousel" data-slide-to="2" class=""></li>
              </ol>
              <div class="carousel-inner mx-auto" role="listbox">
                <div class="carousel-item active">
                  <img class="d-block rounded" style="border-radius: 1rem !important;" src="{{asset('assets/img/bolsas/3.jpg')}}" alt="First slide" width="100%">
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 m-0 p-0 border-right mt-2">
            <h5 class="title font-weight-bold">
              <strong class="">Bolsas en Propalcote</strong><br>
            </h5>
            <br>
              <div class="container border-top">
              <p class="">Cotiza Aquí <button class="btn btn-sm btn-success"><i class="fab fa-whatsapp"></i> Whatsapp en linea</button></p>
                <button class="btn btn-outline-dark">¿Tienes Preguntas?</button>
              </div>
          </div>
          <div class="col-lg-4 col-md-4 mt-2  pl-lg-4">
          </div>
        </div>
        </section>
      <!--     *********   div-2  -->
        <section class="d-none d-sm-none d-md-block d-lg-block mt-5">
          <div class="container-fluid mx-auto p-0 m-0">
            <img src="{{asset('assets/img/theme/div2.jpg')}}" class="img-fluid">
          </div>
        </section>
        <!--     *********   div-2  -->
        <section class="border-top mt-5">
          <div class="container">
            <div class="row mt-5">
              <div class="col-4">
                <button class="btn btn-secondary btn-lg btn-block border">
                  <h5 class="mb-0 pb-0 font-weight-bold">
                    ¿Como Enviar Tu Diseño? <i class="fa fa-caret-down"></i>
                  </h5>
                </button>
              </div>
              <div class="col-4">
                <button class="btn btn-secondary btn-lg btn-block border">
                  <h5 class="mb-0 pb-0 font-weight-bold">
                    ¿Tiempo de Entrega? <i class="fa fa-caret-down"></i>
                  </h5>
                </button>
              </div>
              <div class="col-4">
                <button class="btn btn-secondary btn-lg btn-block border">
                  <h5 class="mb-0 pb-0 font-weight-bold">
                    Requerimientos <i class="fa fa-caret-down"></i>
                  </h5>
                </button>
              </div>
            </div>
          </div>
        </section>
      </div>

       <section class="blogs-6">
        <div class="container">
          <div class=" container mt-3 mb-3">
              <h1 class="mt-5 text-center"><b class=" border-bottom border-danger">Productos Relacionados</b></h1>
            </div>
          <div class="row">
            <div class="col-md-3 mt-5">
              <div class="">
                <img class="card-img-top img-fluid" src="{{asset('assets/img/bolsas/2.jpg')}}" alt="Card image cap">
                <div class="card-body p-0">
                  <h6 class="card-title p-0 m-0">Bolsas Papel Bond</h6>
                  <h6 class="card-text p-0 m-0"><strong>Desde $0.950</strong></h6>
                  <button class="btn btn-block btn-danger mt-1 text-uppercase">Seleccionar</button>
                </div>
              </div>
            </div>
            <div class="col-md-3 mt-5">
              <div class="">
                <img class="card-img-top img-fluid" src="{{asset('assets/img/bolsas/3.jpg')}}" alt="Card image cap">
                <div class="card-body p-0">
                  <h6 class="card-title p-0 m-0">Bolsas Papel Propalcote</h6>
                  <h6 class="card-text p-0 m-0"><strong>Desde $0.950</strong></h6>
                  <button class="btn btn-block btn-danger mt-1 text-uppercase">Seleccionar</button>
                </div>
              </div>
            </div>
            <div class="col-md-3 mt-5">
              <div class="">
                <img class="card-img-top img-fluid" src="{{asset('assets/img/bolsas/4.jpg')}}" alt="Card image cap">
                <div class="card-body p-0">
                  <h6 class="card-title p-0 m-0">Bolsas en Earth Pact</h6>
                  <h6 class="card-text p-0 m-0"><strong>Desde $0.950</strong></h6>
                  <button class="btn btn-block btn-danger mt-1 text-uppercase">Seleccionar</button>
                </div>
              </div>
            </div>
            <div class="col-md-3 mt-5">
              <div class="">
                <img class="card-img-top img-fluid" src="{{asset('assets/img/bolsas/6.jpg')}}" alt="Card image cap">
                <div class="card-body p-0">
                  <h6 class="card-title p-0 m-0">Sticker Adhesivo Cuadrado</h6>
                  <h6 class="card-text p-0 m-0"><strong>Desde $0.950</strong></h6>
                  <button class="btn btn-block btn-danger mt-1 text-uppercase">Seleccionar</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <div class="contactus-1 bg-white mt-5" >
        <div class="container-fluid" style="background-image: url('{{asset('assets/img/ill/header.jpg')}}'); background-size:     cover;  background-repeat:   no-repeat;  background-position: center center; height: 40vh"><br>
          <div class="row ml-3 mt-2">
            <div class="col-lg-5 col-md-5 col-12 d-flex justify-content-center flex-column">
              <h3 class="title text-center text-dark text-uppercase d-none d-sm-none d-lg-block d-md-block" style="font-color: black; ">DESCARGA <strong>GRATIS</strong><br>
                COMO EDITAR MIS FOTOS <br>
                PARA <strong>REDES SOCIALES</strong></h3>
              <h2 class="title text-center text-dark text-uppercase d-block  d-lg-none d-md-none card" style="font-color: black; ">DESCARGA <strong>GRATIS</strong><br>
                COMO EDITAR MIS FOTOS <br>
                PARA <strong>REDES SOCIALES</strong></h2>
              <div class="info info-horizontal">
                <div class="description pull-center text-center">
                 <button class="btn btn-danger text-uppercase btn-round"><h5 class="text-white p-0 m-0"><b>¡Lo Quiero!</b></h5></button>
                </div>
              </div>
            </div>
            <div class="col-lg-5 col-md-7 mx-auto">
              
            </div>
          </div>
        </div>
      </div>
    </div> 

@endsection