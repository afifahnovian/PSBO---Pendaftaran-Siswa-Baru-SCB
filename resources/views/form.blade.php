<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">

        <title>Form Pendaftaran Masahasiswa baru</title>

        <!-- Fonts -->
        <link rel="stylesheet" type="text/css" href= "https://fonts.googleapis.com/css?family=Open+Sans">
        <!-- Styles -->
        <!-- Boostrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> 
    </head>
    
   <style>
      /* Style inputs, select elements and textareas */
      input[type=text], select, textarea{
                width: 100%;
                padding: 12px;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
                resize: vertical;
            }
      .formulir{
                margin : 20px;
                resize: vertical;
      }
      @media screen and (max-width: 500px) {
            .formulir, input[type=submit] {
                width: 100%;
                margin-top: 0px;
            }
            }
      }
      .submit{
                margin: 20px;
      }
          
   </style>
    <!---form--->
<body>

<div class="formulir">
<!--form dengan method post-->
  <form method="POST" action="{{url('/form')}}"> 
  <!--utk form yang ada upload fotonya, formatnya gini, biar fotonya di encryp-->
  <!-- <form method="POST" action="{{url('/form')}}" enctype="multipart/form-data"> -->
  <!--wajib cantumin di stiap form utk akses token, biar ga error -->
  @csrf 
  <div class="form-group">
    <label for="fname">Nama Lengkap</label>
    <input type="text" class="form-control" id="namalengkap" name="namalengkap" placeholder="Nama">
    
  </div>
  <div class="form-group">
    <label for="panggilan">Nama Panggilan</label>
    <input type="text" class="form-control" id="namapanggilan" name="namapanggilan" placeholder="Panggilan">
  </div>
  <div class="form-group">
    <label for="jk">Jenis Kelamin</label>
    <select id="jk" name="jeniskelamin" class="custom-select">
          <option value="1">Laki-laki</option>
          <option value="2">Perempuan</option>
        </select>
  </div>
  <div class="form-group">
    <label for="tempatlahir">Tempat Lahir</label>
    <input type="text" class="form-control" id="tempatlahir" name="tempatlahir" placeholder="Tempat lahir">
  </div>  
  <div class="form-group">
    <label for="tempatlahir">Tanggal Lahir</label>
    <input type="date" class="form-control" id="tgllahir" name="tanggallahir">
  </div> 
  <div class="form-group">
    <label for="alamat">Alamat Lengkap</label>
    <textarea class="form-control" id="alamat" name="alamat" placeholder="Alamat Lengkap" rows="3"></textarea>
  </div>  
  <div class="form-group">
    <label for="nisn">NISN</label>
    <input type="text" class="form-control" id="nisn" name="nisn" placeholder="NISN">
  </div> 
</div>
  <div class="submit">
  <button type="submit" class="btn btn-primary">Submit</button>
  </form>

<!-- JS --> 
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
