@section('css')
<link href="styles.css"/>
@stop
<div class="wrapper">
<nav class="navbar navbar-expand-lg bg-secondary fixed-top" id="mainNav" style="background: #004445">
            <div class="container" style="height: 20px">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <img class="img-responsive" src="assets/img/logo-putih.png" alt="logo" style="width:200px;" /></a>
                <button class="navbar-toggler navbar-toggler-right bg-primary rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="color: #004445 fas fa-bars"></i></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="{{url('/')}}">Beranda</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">Tentang SCB</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">Kontak</a></li>
                    </ul>
                </div>
            </div>
        </nav>
  
    <!--Page Content-->
    
    <div class="main-content">
        <div class="header">
    
            </div>
        </div>
        <div class="content">
       
        @yield('content')
         
        </div>
        @yield('scripts')
    </div>
    
</div>
