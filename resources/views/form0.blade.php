<!DOCTYPE html>


<!--- Styling CSS -->
<style>
    a.link{
        color: #FFFFFF;
    }
    a.card-link {  /* This is the link of the entire card */
            position: absolute;
            width: 23%;
            height: 50%;
            z-index: 1;
            &:hover ~ .card-title {  /* Hints by underlining title that the card is clickable */
                text-decoration: underline;
            }
        }
    .row-choice {
        display: flex;
        }
    .navbar {
        box-shadow: 0px 2px 24px rgba(0, 0, 0, 0.25);
    }

    .column-choice1 {
        flex: 50%;
        margin-top: 165px;
        margin-left: 250px;
        margin-right: 120px;
        
    }
    .column-choice2{
        flex: 50%;
        margin-top : 165px;
        margin-left: 120px;
        margin-right: 250px;
    
    }
    .card-choice1  {
        position: absolute;
        width: 23%;
        height: 50%;
        background: #FFFFFF;
        box-shadow: 0px 0px 32px rgba(0, 0, 0, 0.16);
        border-radius: 24px;
    }
    .card-choice2  {
        position: absolute;
        width: 23%;
        height: 50%;
        background: #FFFFFF;
        box-shadow: 0px 0px 32px rgba(0, 0, 0, 0.16);
        border-radius: 24px;
    }
    .card-img1{
        position: absolute;
        margin: 78px;
        margin-top: 60px;
        align-content: center;        
    }
    .card-img2{
        position: absolute;
        margin: 82px;
        margin-top: 60px;
        align-content: center;   
    }
    .card-title1{
        position: absolute;
        margin: 75px;
        margin-top: 180px;
    }
    .card-title2{
        position: absolute;
        margin: 70px;
        margin-top: 180px;
    }
    .row-title{
        position: absolute;
        margin-left: 550px;
        margin right : 560px;
        margin-top : 100px;
        color: #004445; 
    }
</style>

<body>
    <!-- Just an image -->
<nav class="navbar" style="background-color: #004445;>
  <a class="navbar-brand" href="#">
    <img src="{{url('/images/Logo-SCB_Putih.png')}}" width="175" height="50" alt="">
  </a>
   <div class="top-right-link">                  
        <a class="link" href="#Beranda" style = "padding-right: 20px" >Beranda </a>
        <a class="link" href="#tentangSCB" style="padding-right: 20px">Tentang SCB</a>                  
        <a class="link" href="#kontak">Kontak</a>
    </div>
</nav>
<div class="row-choice">
<div class="row-title">
    <h3 >Kategori Siswa</h3>
</div>
<a href="https://laravel.com/docs" class="card-link"> <div class="column-choice1"> </a>
        <div class="card-choice1">
        <img class="card-img1" src="{{url('/images/umum.png')}}">
        <div class="card-img-overlay">
        <div class="card-title1">
            <h5 >Siswa SMP</h5>
        </div>
        </div>
        </div>
  </div>
  <a href="#" class="card-link"> <div class="column-choice2"> </a>
  <div class="card-choice2">
        <img class="card-img2" src="{{url('/images/khusus.png')}}">
        <div class="card-img-overlay">
            <div class="card-title2">
            <h5 >Siswa Tahfidz</h5>
            </div>
        </div>
        </div>
  </div>
</div>



<!--JS-->
        <!-- Stepper JavaScript -->
        <script type="text/javascript" src="js/addons-pro/steppers.js"></script>
        <!-- Stepper JavaScript - minified -->
        <script type="text/javascript" src="js/addons-pro/steppers.min.js"></script>

</body>