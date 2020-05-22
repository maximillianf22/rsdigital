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
      <div class="container-fluid">
        <!--Secction Priducto-->
        <section id="producto">
        <div class="row mr-5 ml-5">
          <div class="col-lg-5 col-md-6 ">
            <div id="productCarousel" class="carousel slide" data-ride="carousel" data-interval="8000">
              <ol class="carousel-indicators mt-5">
                <li data-target="#productCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#productCarousel" data-slide-to="1" class=""></li>
                <li data-target="#productCarousel" data-slide-to="2" class=""></li>
              </ol>
              <div class="carousel-inner mx-auto" role="listbox">
                <div class="carousel-item active">
                  <img class="d-block rounded" style="border-radius: 1rem !important;" src="{{asset('assets/img/products/product-1.jpg')}}" alt="First slide" width="90%">
                </div>
                <div class="carousel-item">
                  <img class="d-block rounded" style="border-radius: 1rem !important;" src="{{asset('assets/img/products/product-2.jpg')}}" alt="Second slide" width="90%">
                </div>
                <div class="carousel-item">
                  <img class="d-block rounded" style="border-radius: 1rem !important;" src="{{asset('assets/img/products/product-3.jpg')}}" alt="Third slide" width="90%">
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 m-0 p-0 border-right">
            <h5 class="title font-weight-bold">
              <strong class="text-nowrap">Tarejeta de Presentación</strong><br>
              Mate + Reserva UV
            </h5>
            <div class="stats">
              <div class="stars text-danger">
                <h2 class="main-price text-danger font-weight-bold m-0 p-0">$125.950</h2>
                <h6 class="text-dark m-0 p-0">Total sin IVA</h6>
              </div>
            </div>
            <hr>
            <h6 class="category"><strong>Material:</strong> Propalcote 300gr</h6>
            <h6 class="category"><strong>Tamaño:</strong> 9 x 5,5 cm</h6>
            <br>
            <button class="btn btn-outline-dark">¿Tienes Preguntas?</button>
          </div>
          <div class="col-lg-4 col-md-3">
            <h5 class="title font-weight-bold">Selecciona la Cantidad</h5>
            <div class="stats">
              <div class="stars text-warning">
                <button class="btn btn-sm btn-danger">&nbsp; 500 uds &nbsp;</button>
                <button class="btn btn-sm btn-secondary text-danger">1.000 uds</button>
                <button class="btn btn-sm btn-secondary text-danger">2.000 uds</button>
              </div>
            </div>
            <h5 class="title font-weight-bold mt-4">Tipo de Impresión</h5>
              <div class="custom-control custom-radio mb-3">
                <input name="custom-radio-1" class="custom-control-input" id="customRadio1" type="radio">
                <label class="custom-control-label" for="customRadio1">Por una cara 4x0</label>
              </div>
              <div class="custom-control custom-radio mb-3">
                <input name="custom-radio-1" class="custom-control-input" id="customRadio2" checked="" type="radio">
                <label class="custom-control-label" for="customRadio2">Por dos caras 4x4</label>
              </div>
            <div class="row pick-size">
            <h5 class="title font-weight-bold mt-2 ml-2">Elige como crear tu producto</h5>
              <div class="col-lg-4 col-4">
                <div class="custom-control custom-checkbox mb-3">
                  <input class="custom-control-input " id="customCheck2" type="checkbox" checked>
                  <label class="custom-control-label" for="customCheck2"><img src="{{asset('assets/img/theme/cloud.png')}}" class="img-fluid" width="60%" height="60%"></label>
                </div>
              <h6 class="text-center mt-0 pt-0" style="line-height: 1;"><small>Con mi <br>Archivo</small></h6>
              </div>
              <div class="col-lg-4 col-4">
                <div class="custom-control custom-checkbox mb-3">
                  <input class="custom-control-input " id="customCheck3" type="checkbox">
                  <label class="custom-control-label" for="customCheck3"><img src="{{asset('assets/img/theme/diseño.png')}}" class="img-fluid" width="60%" height="60%"></label>
                </div>
                <h6 class="text-center mt-0 pt-0" style="line-height: 1;"><small>Solicitar<br>Diseño</small></h6>
              </div>
              <div class="col-lg-4 col-4 m-0 p-1 border">
                <h6 class="text-center mt-0 pt-1" style="line-height: 1;"><small><strong>Creativos</strong></small></h6>
                <h6 class="text-justify m-0 p-0" style="line-height: 1;"><small>dispuestos a hacer realidad tus ideas inmediatamente</small></h6>
              </div>
            </div>
            <br>
            <div class="row justify-content-start">
              <div class="container">
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="1">
                    </div>
                  </div>
                  <div class="col-8">
                    <button class="btn btn-danger ml-3 btn-block">Agregar al Carrito &nbsp;<i class="ni ni-cart"></i></button>
                  </div>
                </div>
              </div>
              <br>
              <div class="container text-center">
              <h5 class="font-weight-bold text-center">¿Necesitas otra cantidad o medida?</h5>
              <p class="text-center">Cotiza Aquí <button class="btn btn-sm btn-success"><i class="fab fa-whatsapp"></i> Whatsapp en linea</button></p>
              </div>
            </div>
          </div>
        </div>
        </section>
      <!--     *********   div-2  -->
        <section class="d-none d-sm-none d-md-block d-lg-block border-top mt-5">
          <div class="container-fluid mx-auto p-0 m-0">
            <img src="{{asset('assets/img/theme/div2.jpg')}}" class="img-fluid">
          </div>
        </section>
        <!--     *********   div-2  -->
        <section class="border-top mt-5">
          <div class="container">
            <div class="row mt-5">
              <div class="col-6">
                <button class="btn btn-secondary btn-lg btn-block border">
                  <h5 class="mb-0 pb-0 font-weight-bold">
                    ¿Como Enviar Tu Diseño? <i class="fas fa-chevron-down"></i>
                  </h5>
                </button>
              </div>
              <div class="col-6">
                <button class="btn btn-secondary btn-lg btn-block border">
                  <h5 class="mb-0 pb-0 font-weight-bold">
                    ¿Tiempo de Entrega? <i class="fas fa-chevron-down"></i>
                  </h5>
                </button>
              </div>
            </div>
          </div>
        </section>
        <!--     *********   productos relacionados  -->
        <section class="blogs-6">
        <div class="container-fluid mt-3">
          <div class=" container mt-3 mb-3">
            <div class="row">
              <div class="col-2"></div>
                <div class="col-8 text-center">
                  <h1 class="text-center" style="border-bottom: .1rem solid #df0024!important;">Productos Relacionados</h1>
                </div>
              <div class="col-2"></div>
            </div>
            </div>
          <div class="row ml-5 mr-5">
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
      </div>
    </div>

@endsection