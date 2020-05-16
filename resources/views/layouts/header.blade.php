<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Pendaftaran Calon Siswa Baru Sekolah Cendekia Basnaz - @yield('title')</title>
        @include('activation.activation-css')
    </head>
<body id="page-top">
    @include('layouts.navbar')
    <div class="wrapper">
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

    @include('activation.activation-js')
</body>
