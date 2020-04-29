<div class="wrapper">
    <nav class="navbar" style="background-color: #004445;">
            <a class="navbar-brand" href="#">
                <img src="{{url('/images/Logo-SCB_Putih.png')}}" width="175" height="50" alt="">
            </a>
            <div class="top-right-link">                  
                    <a class="link" href="#Beranda" style = "padding-right: 20px" >Beranda </a>
                    <a class="link" href="#tentangSCB" style="padding-right: 20px">Tentang SCB</a>                  
                    <a class="link" href="#kontak">Kontak</a>
            </div>
    </nav>
    <!--Page Content-->
    
    <div class="main-content">
        <div class="header">
            <h3>@yield('navbar_title')</h3>
            <div class="info">
               
            </div>
        </div>
        <div class="content">
         @yield('content')
        </div>
    </div>
    
</div>
