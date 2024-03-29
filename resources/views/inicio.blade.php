@extends('layout.index')

@section('title', 'Inicio')

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
      <!--     *********     Header    -->
      <div class="contactus-1 bg-white" >
        <div class="container " style="background-image: url('{{asset('assets/img/ill/header.jpg')}}'); background-size:     cover;  background-repeat:   no-repeat;  background-position: center center; height: 50vh"><br>
          <div class="row ml-3 mt-5">
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
      <!--     *********     Nav    -->
        <div class="container shadow-sm d-none d-sm-none d-md-block d-lg-block">
        <ul class="nav justify-content-center nav nav-pills nav-fill flex-column flex-sm-row mb-0">
              <li class="nav-item border-bottom mx-auto pr-0" style="border-bottom: .1rem solid #df0024!important;">
                <a class="nav-link bg-white text-dark mb-0 hovertext" href="/tarjetas" style="line-height: 0.9rem;"><strong>Tarjetas de <br>Presetación</strong></a>
              </li>
              <li class="nav-item mx-auto pr-0">
                <a class="nav-link bg-white mb-0 mt-1 hovertext" href="/bolsas-empaques"><strong>Bolsas & Empaques</strong></a>
              </li>
              <li class="nav-item mx-auto pr-0">
                <a class="nav-link bg-white mb-0 mt-1 hovertext" href="/papeleria"><strong>Volantes</strong></a>
              </li>
              <li class="nav-item mx-auto pr-0">
                <a class="nav-link bg-white mb-0 mt-1 hovertext" href="/pendones"><strong>Pendones</strong></a>
              </li>
               <li class="nav-item mx-auto pr-0">
                <a class="nav-link bg-white mb-0 mt-1 hovertext" href="/papeleria"><strong>Membretes</strong></a>
              </li>
               <li class="nav-item mx-auto pr-0">
                <a class="nav-link bg-white mb-0 mt-1 hovertext" href="/papeleria"><strong>Facturas</strong></a>
              </li>
            </ul>
            </div>
        <br><br>
      <!--     *********    Tarjeta Opciones  -->
      <section class="blogs-6">
        <a href="/producto">
        <div class="container">
          <div class="row">
            <div class="col-md-3">
              <div class="card">
                <img class="card-img-top img-fluid" src="{{asset('assets/img/products/product-1.jpg')}}" alt="Card image cap">
                <div class="card-body">
                  <h6 class="card-title p-0 m-0"><b>Tarjeta de Presentación</b></h6>
                  <h6 class="card-text p-0 m-0">Mate</h6>
                  <h6 class="card-text p-0 m-0"><strong>Desde $19.950</strong></h6>
                  <button class="btn btn-block btn-danger mt-1 text-uppercase">Seleccionar</button>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card">
                <img class="card-img-top img-fluid" src="{{asset('assets/img/products/product-2.jpg')}}" alt="Card image cap">
                <div class="card-body">
                  <h6 class="card-title p-0 m-0"><b>Tarjeta de Presentación</b></h6>
                  <h6 class="card-text p-0 m-0">Mate</h6>
                  <h6 class="card-text p-0 m-0"><strong>Desde $19.950</strong></h6>
                  <button class="btn btn-block btn-danger mt-1 text-uppercase">Seleccionar</button>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card">
                <img class="card-img-top img-fluid" src="{{asset('assets/img/products/product-3.jpg')}}" alt="Card image cap">
                <div class="card-body">
                  <h6 class="card-title p-0 m-0"><b>Tarjeta de Presentación</b></h6>
                  <h6 class="card-text p-0 m-0">Mate</h6>
                  <h6 class="card-text p-0 m-0"><strong>Desde $19.950</strong></h6>
                  <button class="btn btn-block btn-danger mt-1 text-uppercase">Seleccionar</button>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card">
                <img class="card-img-top img-fluid" src="{{asset('assets/img/products/product-4.jpg')}}" alt="Card image cap">
                <div class="card-body">
                  <h6 class="card-title p-0 m-0"><b>Tarjeta de Presentación</b></h6>
                  <h6 class="card-text p-0 m-0">Mate</h6>
                  <h6 class="card-text p-0 m-0"><strong>Desde $19.950</strong></h6>
                  <button class="btn btn-block btn-danger mt-1 text-uppercase">Seleccionar</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        </a>
      </section>
      <!--     *********   div-1  -->
      <section class="d-none d-sm-none d-md-block d-lg-block">
        <div class="container mx-auto p-0 m-0">
        <img src="{{asset('assets/img/theme/div1.jpg')}}" class="img-fluid">
      </div>
      </section>
      <!--     *********   Compra  -->
       <section class="mt-2">
        <div class="container" style="background-image: url('{{asset('assets/img/theme/div-bg.jpg')}}');; background-attachment: fixed; background-size:     cover;  background-repeat:   no-repeat;  background-position: center center; height: 35vh">
            <div class="row ml-5">
            <div class="col-lg-5 col-md-5 col-12 d-flex justify-content-center flex-column">
              <h2 class="title text-center text-white text-uppercase mt-2" style="font-color: white; ">
                <img src="{{asset('assets/img/theme/truck.png')}}" class="img-fluid" width="10%" height="10%"><br>
                Compra ONLINE,<br>
                te lo llevamos <strong>Gratis</strong><br>
                  <img src="{{asset('assets/img/theme/text-div.png')}}" class="img-fluid" width="50%" height="50%">
              </h2>
            </div>
            <div class="col-lg-5 col-md-7 mx-auto">
              
            </div>
          </div>
        </div><br>
      </section>
            <!--     *********    Tarjeta Opciones  -->
      <section class="blogs-6">
        <a href="/producto">

        <div class="container">
          <div class=" container mt-3 mb-3">
            <div class="row">
              <div class="col-2"></div>
                <div class="col-8 text-center">
                  <h3 class="text-center font-weight-bold" style="border-bottom: .1rem solid #df0024!important;">Productos más vendidos</h3>
                </div>
              <div class="col-2"></div>
            </div>
            </div>
          <div class="row">
            <div class="col-md-3">
              <div class="card">
                <img class="card-img-top img-fluid" src="{{asset('assets/img/products/product-1.jpg')}}" alt="Card image cap">
                <div class="card-body">
                  <h6 class="card-title p-0 m-0"><b>Tarjeta de Presentación</b></h6>
                  <h6 class="card-text p-0 m-0">Mate</h6>
                  <h6 class="card-text p-0 m-0"><strong>Desde $19.950</strong></h6>
                  <button class="btn btn-block btn-danger mt-1 text-uppercase">Seleccionar</button>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card">
                <img class="card-img-top img-fluid" src="{{asset('assets/img/products/product-2.jpg')}}" alt="Card image cap">
                <div class="card-body">
                  <h6 class="card-title p-0 m-0"><b>Tarjeta de Presentación</b></h6>
                  <h6 class="card-text p-0 m-0">Mate</h6>
                  <h6 class="card-text p-0 m-0"><strong>Desde $19.950</strong></h6>
                  <button class="btn btn-block btn-danger mt-1 text-uppercase">Seleccionar</button>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card">
                <img class="card-img-top img-fluid" src="{{asset('assets/img/products/product-3.jpg')}}" alt="Card image cap">
                <div class="card-body">
                  <h6 class="card-title p-0 m-0"><b>Tarjeta de Presentación</b></h6>
                  <h6 class="card-text p-0 m-0">Mate</h6>
                  <h6 class="card-text p-0 m-0"><strong>Desde $19.950</strong></h6>
                  <button class="btn btn-block btn-danger mt-1 text-uppercase">Seleccionar</button>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card">
                <img class="card-img-top img-fluid" src="{{asset('assets/img/products/product-4.jpg')}}" alt="Card image cap">
                <div class="card-body">
                  <h6 class="card-title p-0 m-0"><b>Tarjeta de Presentación</b></h6>
                  <h6 class="card-text p-0 m-0">Mate</h6>
                  <h6 class="card-text p-0 m-0"><strong>Desde $19.950</strong></h6>
                  <button class="btn btn-block btn-danger mt-1 text-uppercase">Seleccionar</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        </a>
      </section>
        <!--     *********   Seccion Suscribete  -->
        <section> 
          <div class="container bg-secondary shadow-sm">
            <div class="row pt-5 pb-3">
                <div class="col-md-3 col-1"></div>
                <div class="col-md-6 col-10">
                  <div class="text-center">
                    <h4 class="title">Suscríbete y seras el primero en saber de
                      nuestras <strong>promociones y descuentos</strong></h4>
                  </div>
                    <form class="mt-4" method="" action="">
                      <div class="rounded text-nowrap input-group">
                        <div class="input-group input-group-alternative mb-4">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                            </div>
                            <input class="form-control" placeholder="Correo electronico" type="text">
                            <div class="input-group-append">
                                <button class="btn btn-danger" type="button">Enviar</button>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
                <div class="col-md-3 col-1"></div>
            </div>
          </div>
        </section>

        <section>
          <div class="container pt-3 pb-3">
            <div class="col-md-12 p-0">
              <div class="row row-cols-1 row-cols-md-3">
                  <div class="owl-carousel owl-head owl-theme owl-loaded owl-drag">
                  <div class="owl-stage-outer">
                  <div class="owl-stage">

                      <div class="owl-item col-lg-4 col-md-3 col-sm-4 col-6 p-0" data-animation="zooming">
                      <div class="item">
                        <div class="card-product m-0">
                            <div class="card-image">
                              <a type="button" data-toggle="modal" data-target=".bd-example-modal-lg">
                                <img src="{{asset('assets/img/theme/clientes/cliente1.png')}}" class="shad border-radius" alt="...">
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="owl-item col-lg-4 col-md-3 col-sm-4 col-6 p-0" data-animation="zooming">
                      <div class="item">
                        <div class="card-product m-0">
                            <div class="card-image">
                              <a type="button" data-toggle="modal" data-target=".bd-example-modal-lg">
                                <img src="{{asset('assets/img/theme/clientes/cliente2.png')}}" class="shad border-radius" alt="...">
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="owl-item col-lg-4 col-md-3 col-sm-4 col-6 p-0" data-animation="zooming">
                      <div class="item">
                        <div class="card-product m-0">
                            <div class="card-image">
                              <a type="button" data-toggle="modal" data-target=".bd-example-modal-lg">
                                <img src="{{asset('assets/img/theme/clientes/cliente3.png')}}" class="shad border-radius" alt="...">
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="owl-item col-lg-4 col-md-3 col-sm-4 col-6 p-0" data-animation="zooming">
                      <div class="item">
                        <div class="card-product m-0">
                            <div class="card-image">
                              <a type="button" data-toggle="modal" data-target=".bd-example-modal-lg">
                                <img src="{{asset('assets/img/theme/clientes/cliente4.png')}}" class="shad border-radius" alt="...">
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="owl-item col-lg-4 col-md-3 col-sm-4 col-6 p-0" data-animation="zooming">
                      <div class="item">
                        <div class="card-product m-0">
                            <div class="card-image">
                              <a type="button" data-toggle="modal" data-target=".bd-example-modal-lg">
                                <img src="{{asset('assets/img/theme/clientes/cliente5.png')}}" class="shad border-radius" alt="...">
                              </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>
@endsection


@section('js')
  <script>
     $('.owl-head').owlCarousel({
        loop: true,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 4000,
        autoplayHoverPause: true,
        responsiveClass: true,
        responsive: {
            0: {
                items: 3,
                loop: true,
                nav: true
            },
            600: {
                items: 6,
                loop: true,
                nav: false
            },
            1100: {
                items: 8,
                loop: true,
                nav: false
            }

        }
    })
  </script>
@endsection