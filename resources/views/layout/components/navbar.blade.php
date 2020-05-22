  <!-- Navbar -->
<nav class="navbar navbar-expand-lg p-0 m-0 navbar-dark bg-secondary">
    <div class="container">
      <div class="row">
        <div class="col-3"></div>
        <div class="col-6 p-1 m-1">
            <img src="{{asset('assets/img/theme/brand.png')}}" class="img-fluid" alt=""/>
        </div>
        <div class="col-3"></div>
      </div>
    </div>
</nav>
<nav class="navbar navbar-expand-lg navbar-light shadow-sm">
    <div class="container-fluid ml-4 mr-4">
        <a class="navbar-brand" href="#"><img src="{{asset('assets/img/theme/logo.png')}}" class="p-0 m-0" alt="" /></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-default" aria-controls="navbar-default" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-default">
            <div class="navbar-collapse-header">
                <div class="row">
                    <div class="col-6 collapse-brand"> 
                        <a href="#">
                          <img src="{{asset('assets/img/theme/logo.png')}}" class="p-0 m-0" alt="" />
                        </a>
                    </div>
                    <div class="col-6 collapse-close">
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-default" aria-controls="navbar-default" aria-expanded="false" aria-label="Toggle navigation">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
            <ul class="navbar-nav ml-lg-auto border-right">
                <li class="nav-item">
                    <a class="btn btn-danger btn-round mt-1 btn-sm" href="#">
                        <span>¿Que quieres imprimir?</span>
                        <i class="fas fa-chevron-down"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-outline-secondary btn-round mt-1 btn-sm" href="#">
                        <span class="nav-link-inner--text text-dark">Blog</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-outline-secondary btn-round mt-1 btn-sm" href="#">
                        <span class="nav-link-inner--text text-dark">Nosotros</span>
                        <i class="fas fa-chevron-down"></i>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="btn btn-outline-danger btn-round mt-1 btn-sm" href="#" id="navbar-default_dropdown_1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span>Inicia sesión</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbar-default_dropdown_1">
                        <a class="dropdown-item" href="#">Comercio Unico</a>
                        <a class="dropdown-item" href="#">Multi Comercio </a>
                    </div>
                </li>
                <li class="nav-item mr-3 mt-1">
                    <a href="#">
                        <i class="fas fa-search text-dark"></i>
                    </a>
                </li> 
            </ul>

            <ul class="navbar-nav ml-3">
               <li class="nav-item m-2">
                    <a href="#">
                      <i class="fas fa-cloud-upload-alt text-dark"></i>
                    </a>
                </li>  
                <li class="nav-item m-2">
                    <a href="#">
                      <i class="fas fa-shopping-cart text-dark"></i>
                    </a>
                </li>   
            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar -->