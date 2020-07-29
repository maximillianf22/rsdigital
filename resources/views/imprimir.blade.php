@extends('layout.index')

@section('title', '¿Que quieres imprimir?')

@section('style')
<style>
    .navbar-brand img {
        height: 37px;
  }

    a.bg-white:focus, a.bg-white:hover, button.bg-white:focus, button.bg-white:hover {
        background-color: #df0024!important; */
  }

    .nav-pills .nav-link {
      box-shadow: 0 1px 1px rgba(50,50,93,.11), 0 1px 1px rgba(0,0,0,0); */
  }

  .hovertext {
    color:black !important;
  }

  a.hovertext:hover {
    color: white !important;
  }

  .nav-pills .nav-link {
    box-shadow: 0 0px 0px rgba(50,50,93,.11), 0 0px 0px rgba(0,0,0,0) !important;
}
</style>
@endsection

@section('content')
    
      <section class="blogs-6">
        <div class="container">
        <h1 class="mt-5"><b class=" border-bottom border-danger">¿Que quieres imprimir?</b></h1>
          <div class="row">
            <div class="col-md-3 mt-5">
              <a href="/bolsas">
                <img class="card-img-top img-fluid" src="{{asset('assets/img/imprimir/bolsa.jpg')}}" alt="Card image cap">
                <div class="card-body p-0">
                  <button class="btn btn-block btn-danger mt-1 text-uppercase">Bolsas y Etiquetas</button>
                </div>
              </a>
            </div>
            <div class="col-md-3 mt-5">
              <a href="/tarjetas">
                <img class="card-img-top img-fluid" src="{{asset('assets/img/imprimir/tarjeta.jpg')}}" alt="Card image cap">
                <div class="card-body p-0">
                  <button class="btn btn-block btn-danger mt-1 text-uppercase">Tarjetas de Presentación</button>
                </div>
              </a>
            </div>
            <div class="col-md-3 mt-5">
              <a href="/pendones">
                <img class="card-img-top img-fluid" src="{{asset('assets/img/imprimir/pendon.jpg')}}" alt="Card image cap">
                <div class="card-body p-0">
                  <button class="btn btn-block btn-danger mt-1 text-uppercase">Digital Gran Formato</button>
                </div>
              </a>
            </div>
            <div class="col-md-3 mt-5">
              <a href="/papeleria">
                <img class="card-img-top img-fluid" src="{{asset('assets/img/imprimir/afiche.jpg')}}" alt="Card image cap">
                <div class="card-body p-0">
                  <button class="btn btn-block btn-danger mt-1 text-uppercase">Papeleria Corporativa</button>
                </div>
              </a>
            </div>
            <div class="col-md-3 mt-5">
              <a href="#">
                <img class="card-img-top img-fluid" src="{{asset('assets/img/imprimir/empaque.jpg')}}" alt="Card image cap">
                <div class="card-body p-0">
                  <button class="btn btn-block btn-danger mt-1 text-uppercase">Empaques</button>
                </div>
              </a>
            </div>
            <div class="col-md-3 mt-5">
              <a href="#">
                <img class="card-img-top img-fluid" src="{{asset('assets/img/imprimir/sorvenir.jpg')}}" alt="Card image cap">
                <div class="card-body p-0">
                  <button class="btn btn-block btn-danger mt-1 text-uppercase">Sorvenir</button>
                </div>
              </a>
            </div>
            <div class="col-md-3 mt-5">
              <a href="#">
                <img class="card-img-top img-fluid" src="{{asset('assets/img/imprimir/impresion.jpg')}}" alt="Card image cap">
                <div class="card-body p-0">
                  <button class="btn btn-block btn-danger mt-1 text-uppercase">Impresión Digital</button>
                </div>
              </a>
            </div>
          </div>
        </div>
      </section>

      <section class="blogs-6">
        <div class="container">
        <h1 class="mt-5 text-center">Como realizar <strong>TUS PEDIDOS</strong><br>  con <strong>RS PUBLICIDAD</strong></h1>
        <div class="container">
          <div class="row">
            <div class="col text-center">
              <iframe width="700" height="415" src="https://www.youtube.com/embed/2qbr_yUMbQs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
          </div>
        </div>
        </div>
      </section>

      <div class="contactus-1 bg-white my-5" >
        <div class="container-fluid" style="background-image: url('{{asset('assets/img/ill/bg-food.jpg')}}'); background-size:     cover;  background-repeat:   no-repeat;  background-position: center center; height: 40vh"><br>
          <div class="row ml-3 mt-2">
            <div class="col-lg-5 col-md-7 mx-auto">
              
            </div>
            <div class="col-lg-5 col-md-5 col-12 d-flex justify-content-center flex-column">
              <h3 class="title text-center text-white text-uppercase d-none d-sm-none d-lg-block d-md-block" style="font-color: white; ">Descarga <strong>GRATIS</strong><br>
                como tomar fotos <br>
                PARA <strong>INSTAGRAM</strong></h3>
              <h2 class="title text-center text-white text-uppercase d-block  d-lg-none d-md-none card" style="font-color: white; ">Descarga <strong>GRATIS</strong><br>
                como tomar fotos <br>
                PARA <strong>INSTAGRAM</strong></h2>
              <div class="info info-horizontal">
                <div class="description pull-center text-center">
                 <button class="btn btn-danger text-uppercase btn-round"><h5 class="text-white p-0 m-0"><b>¡Lo Quiero!</b></h5></button>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>


@endsection