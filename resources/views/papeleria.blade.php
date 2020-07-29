@extends('layout.index')

@section('title', 'Papeleria Corporativa')

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
        <h1 class="mt-5"><b class=" border-bottom border-danger">Papelería Corporativa</b></h1>
          <div class="row">
            <div class="col-md-3 mt-5">
             <a href="/volantes-economicos">
                <img class="card-img-top img-fluid" src="{{asset('assets/img/papeleria/1.jpg')}}" alt="Card image cap">
                  <div class="card-body p-0">
                    <h6 class="card-title p-0 m-0">Volantes Economicos</h6>
                    <h6 class="card-text p-0 m-0"><strong>Desde $0.950</strong></h6>
                  <button class="btn btn-block btn-danger mt-1 text-uppercase">Seleccionar</button>
                </div>
              </a>
            </div>
            <div class="col-md-3 mt-5">
             <a href="/volantes">
                <img class="card-img-top img-fluid" src="{{asset('assets/img/papeleria/2.jpg')}}" alt="Card image cap">
                  <div class="card-body p-0">
                    <h6 class="card-title p-0 m-0">Volantes</h6>
                    <h6 class="card-text p-0 m-0"><strong>Desde $0.950</strong></h6>
                  <button class="btn btn-block btn-danger mt-1 text-uppercase">Seleccionar</button>
                </div>
              </a>
            </div>
            <div class="col-md-3 mt-5">
             <a href="/plegables">
                <img class="card-img-top img-fluid" src="{{asset('assets/img/papeleria/3.jpg')}}" alt="Card image cap">
                  <div class="card-body p-0">
                    <h6 class="card-title p-0 m-0">Plegables</h6>
                    <h6 class="card-text p-0 m-0"><strong>Desde $0.950</strong></h6>
                  <button class="btn btn-block btn-danger mt-1 text-uppercase">Seleccionar</button>
                </div>
              </a>
            </div>
            <div class="col-md-3 mt-5">
             <a href="/membrete">
                <img class="card-img-top img-fluid" src="{{asset('assets/img/papeleria/4.jpg')}}" alt="Card image cap">
                  <div class="card-body p-0">
                    <h6 class="card-title p-0 m-0">Hojas Membretadas</h6>
                    <h6 class="card-text p-0 m-0"><strong>Desde $0.950</strong></h6>
                  <button class="btn btn-block btn-danger mt-1 text-uppercase">Seleccionar</button>
                </div>
              </a>
            </div>
            <div class="col-md-3 mt-5">
             <a href="/membrete-ecologicas">
                <img class="card-img-top img-fluid" src="{{asset('assets/img/papeleria/5.jpg')}}" alt="Card image cap">
                  <div class="card-body p-0">
                    <h6 class="card-title p-0 m-0">Hojas Membretadas Ecologicas</h6>
                    <h6 class="card-text p-0 m-0"><strong>Desde $0.950</strong></h6>
                  <button class="btn btn-block btn-danger mt-1 text-uppercase">Seleccionar</button>
                </div>
              </a>
            </div>
            <div class="col-md-3 mt-5">
             <a href="/factura-media-carta">
                <img class="card-img-top img-fluid" src="{{asset('assets/img/papeleria/6.jpg')}}" alt="Card image cap">
                  <div class="card-body p-0">
                    <h6 class="card-title p-0 m-0">Talonario de Factura Tamaño Media Carta</h6>
                    <h6 class="card-text p-0 m-0"><strong>Desde $0.950</strong></h6>
                  <button class="btn btn-block btn-danger mt-1 text-uppercase">Seleccionar</button>
                </div>
              </a>
            </div>
            <div class="col-md-3 mt-5">
             <a href="/factura-carta">
                <img class="card-img-top img-fluid" src="{{asset('assets/img/papeleria/6a.jpg')}}" alt="Card image cap">
                  <div class="card-body p-0">
                    <h6 class="card-title p-0 m-0">Talonario de Factura Tamaño Carta</h6>
                    <h6 class="card-text p-0 m-0"><strong>Desde $0.950</strong></h6>
                  <button class="btn btn-block btn-danger mt-1 text-uppercase">Seleccionar</button>
                </div>
              </a>
            </div>
            <div class="col-md-3 mt-5">
             <a href="/factura-oficio">
                <img class="card-img-top img-fluid" src="{{asset('assets/img/papeleria/7.jpg')}}" alt="Card image cap">
                  <div class="card-body p-0">
                    <h6 class="card-title p-0 m-0">Talonario de Factura Tamaño Oficio</h6>
                    <h6 class="card-text p-0 m-0"><strong>Desde $0.950</strong></h6>
                  <button class="btn btn-block btn-danger mt-1 text-uppercase">Seleccionar</button>
                </div>
              </a>
            </div>
              <div class="col-md-3 mt-5">
             <a href="/recetarios">
                <img class="card-img-top img-fluid" src="{{asset('assets/img/papeleria/8.jpg')}}" alt="Card image cap">
                  <div class="card-body p-0">
                    <h6 class="card-title p-0 m-0">Recetarios</h6>
                    <h6 class="card-text p-0 m-0"><strong>Desde $0.950</strong></h6>
                  <button class="btn btn-block btn-danger mt-1 text-uppercase">Seleccionar</button>
                </div>
              </a>
            </div>
            <div class="col-md-3 mt-5">
             <a href="carpetas">
                <img class="card-img-top img-fluid" src="{{asset('assets/img/papeleria/9.jpg')}}" alt="Card image cap">
                  <div class="card-body p-0">
                    <h6 class="card-title p-0 m-0">Carpetas Corporativas</h6>
                    <h6 class="card-text p-0 m-0"><strong>Desde $0.950</strong></h6>
                  <button class="btn btn-block btn-danger mt-1 text-uppercase">Seleccionar</button>
                </div>
              </a>
            </div>
            <div class="col-md-3 mt-5">
             <a href="/calendarios">
                <img class="card-img-top img-fluid" src="{{asset('assets/img/papeleria/10.jpg')}}" alt="Card image cap">
                  <div class="card-body p-0">
                    <h6 class="card-title p-0 m-0">Calendarios de Mesa</h6>
                    <h6 class="card-text p-0 m-0"><strong>Desde $0.950</strong></h6>
                  <button class="btn btn-block btn-danger mt-1 text-uppercase">Seleccionar</button>
                </div>
              </a>
            </div>
            <div class="col-md-3 mt-5">
             <a href="/afiches">
                <img class="card-img-top img-fluid" src="{{asset('assets/img/papeleria/11.jpg')}}" alt="Card image cap">
                  <div class="card-body p-0">
                    <h6 class="card-title p-0 m-0">Afiches</h6>
                    <h6 class="card-text p-0 m-0"><strong>Desde $0.950</strong></h6>
                  <button class="btn btn-block btn-danger mt-1 text-uppercase">PSeleccionar</button>
                </div>
              </a>
            </div>
            <div class="col-md-3 mt-5">
             <a href="/cambrella">
                <img class="card-img-top img-fluid" src="{{asset('assets/img/papeleria/12.jpg')}}" alt="Card image cap">
                  <div class="card-body p-0">
                    <h6 class="card-title p-0 m-0">Sobres</h6>
                    <h6 class="card-text p-0 m-0"><strong>Desde $0.950</strong></h6>
                  <button class="btn btn-block btn-danger mt-1 text-uppercase">Seleccionar</button>
                </div>
              </a>
            </div>
            <div class="col-md-3 mt-5">
             <a href="/stiker-cuadrado">
                <img class="card-img-top img-fluid" src="{{asset('assets/img/papeleria/13.jpg')}}" alt="Card image cap">
                  <div class="card-body p-0">
                    <h6 class="card-title p-0 m-0">Individuales</h6>
                    <h6 class="card-text p-0 m-0"><strong>Desde $0.950</strong></h6>
                  <button class="btn btn-block btn-danger mt-1 text-uppercase">Seleccionar</button>
                </div>
              </a>
            </div>
            <div class="col-md-3 mt-5">
             <a href="/stiker-redondo">
                <img class="card-img-top img-fluid" src="{{asset('assets/img/papeleria/14.jpg')}}" alt="Card image cap">
                  <div class="card-body p-0">
                    <h6 class="card-title p-0 m-0">Tacos de Memos</h6>
                    <h6 class="card-text p-0 m-0"><strong>Desde $0.950</strong></h6>
                  <button class="btn btn-block btn-danger mt-1 text-uppercase">Seleccionar</button>
                </div>
              </a>
            </div>
            <div class="col-md-3 mt-5">
             <a href="/imanes">
                <img class="card-img-top img-fluid" src="{{asset('assets/img/papeleria/15.jpg')}}" alt="Card image cap">
                  <div class="card-body p-0">
                    <h6 class="card-title p-0 m-0">Agendas</h6>
                    <h6 class="card-text p-0 m-0"><strong>Desde $0.950</strong></h6>
                  <button class="btn btn-block btn-danger mt-1 text-uppercase">Seleccionar</button>
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

      <section class="my-5">
        <div class="container-fluid" style="background-image: url('{{asset('assets/img/theme/div-bg.jpg')}}');; background-attachment: fixed; background-size:     cover;  background-repeat:   no-repeat;  background-position: center center; height: 40vh">
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


@endsection