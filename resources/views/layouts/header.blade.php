<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Pendaftaran Calon Siswa Baru Sekolah Cendekia Basnaz - @yield('title')</title>
        @include('activation.activation-css')
         <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('images/icon-logo.png')}}">
    </head>
<body>
    
  
   
    <!--Page Content-->
        <div class="main-content">
            <div class="header">
        
                </div>
            </div>
            <div class="content">
            @include('layouts.navbar')
            
                @yield('content')
            
            </div>
            @yield('scripts')
        </div>
    

    @include('activation.activation-js')
</body>
