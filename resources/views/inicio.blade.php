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
</style>
@endsection

@section('content')
      <!--     *********     Header    -->
      <div class="contactus-1 bg-default" style="background-image: url('{{asset('assets/img/ill/header.jpg')}}'); background-attachment: fixed; background-size:     cover;  background-repeat:   no-repeat;  background-position: center center; height: 60vh">
        <div class="container-fluid "><br>
          <div class="row mt-5">
            <div class="col-lg-5 col-md-5 col-12 d-flex justify-content-center flex-column">
              <h2 class="title text-center text-dark text-uppercase d-none d-sm-none d-lg-block d-md-block" style="font-color: black; ">DESCARGA <strong>GRATIS</strong><br>
                COMO EDITAR MIS FOTOS <br>
                PARA <strong>REDES SOCIALES</strong></h2>
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
      <div class="container-fluid shadow d-none d-sm-none d-md-block d-lg-block">
        <div class="container">
        <ul class="nav justify-content-center nav nav-pills nav-fill flex-column flex-sm-row mb-0">
              <li class="nav-item border-bottom mx-auto pr-0" style="border-bottom: .1rem solid #df0024!important;">
                <a class="nav-link bg-white text-dark mb-0" href="#!"><strong>Tarjetas</strong></a>
              </li>
              <li class="nav-item mx-auto pr-0">
                <a class="nav-link bg-white text-dark mb-0" href="#!"><strong>Volantes</strong></a>
              </li>
              <li class="nav-item mx-auto pr-0">
                <a class="nav-link bg-white text-dark mb-0" href="#!"><strong>Pendones</strong></a>
              </li>
               <li class="nav-item mx-auto pr-0">
                <a class="nav-link bg-white text-dark mb-0" href="#!"><strong>Membretes</strong></a>
              </li>
               <li class="nav-item mx-auto pr-0">
                <a class="nav-link bg-white text-dark mb-0" href="#!"><strong>Facturas</strong></a>
              </li>
            </ul>
            </div>
        </div><br><br>
      <!--     *********    Tarjeta Opciones  -->
      <section class="blogs-6">
        <div class="container-fluid">
          <div class="row ml-3 mr-3">
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
      </section>
      <!--     *********   div-1  -->
      <section>
        <div class="container-fluid mx-auto p-0 m-0">
        <img src="{{asset('assets/img/theme/div1.jpg')}}" class="img-fluid">
      </div>
      </section>
       <section class="mt-2">
        <div class="container-fluid " style="background-image: url('{{asset('assets/img/theme/div-bg.jpg')}}');; background-attachment: fixed; background-size:     cover;  background-repeat:   no-repeat;  background-position: center center; height: 40vh">
            <div class="row">
            <div class="col-lg-5 col-md-5 col-12 d-flex justify-content-center flex-column">
              <h2 class="title text-center text-white text-uppercase mt-4" style="font-color: white; ">Compra online,<br>
                Te lo llevamos <strong>Gratis</strong></h2>
              <div class="info info-horizontal">
                <div class="description pull-center text-center">
                  <img src="{{asset('assets/img/theme/text-div.png')}}" class="img-fluid" width="50%" height="50%">
                </div>
              </div>
            </div>
            <div class="col-lg-5 col-md-7 mx-auto">
              
            </div>
          </div>
        </div><br>
      </section>
            <!--     *********    Tarjeta Opciones  -->
      <section class="blogs-6">
        <div class="container-fluid">
          <div class=" container mt-3 mb-3">
            <div class="row">
              <div class="col-2"></div>
                <div class="col-8 text-center">
                  <h1 class="text-center" style="border-bottom: .1rem solid #df0024!important;">Productos más vendidos</h1>
                </div>
              <div class="col-2"></div>
            </div>
            </div>
          <div class="row ml-3 mr-3">
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
      </section>
        <!--     *********   Seccion Suscribete  -->
        <section> 
          <div class="container-fluid bg-secondary shadow-sm">
            <div class="row pt-5 pb-3">
                <div class="col-md-3 col-1"></div>
                <div class="col-md-6 col-10">
                  <div class="text-center">
                    <h4 class="title">Suscríbete y seras el primero en saber de
                      nuestras <strong>promociones y descuentos</strong></h4>
                  </div>
                    <form class="mt-4" method="" action="">
                      <div class="row">
                        <div class="col-sm-8">
                          <div class="form-group">
                            <div class="input-group input-group-alternative mb-4">
                              <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                              </div>
                              <input class="form-control" placeholder="Correo electronico" type="text">
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <button type="de intel" class="btn btn-danger btn-block">Suscríbete</button>
                        </div>
                      </div>
                    </form>
                </div>
                <div class="col-md-3 col-1"></div>
            </div>
          </div>
        </section>

        <section>
          <div class="container-fluid pt-3 pb-3">
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