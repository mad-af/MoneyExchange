<?php
session_start();

if(isset($_SESSION["login"])){
  Header("location:sd.php");
  exit;
}elseif (isset($_SESSION["admin"])) {
  Header("location:tambah.php");
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>PEMINJAMAN</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <style media="screen">
    body{
      margin: 0px;
    }
    .top{
      margin-top: -20px;
      margin-bottom: -10px;
      background-color: rgb(230 ,230, 250);
      padding:  25px 0 5px;
    }
    .navbar{
      background-color: rgb(72 ,61 ,139);
      height: 60px;
    }
    h1{
      font-size: 50px;
      text-align: center;
      margin-top: 20px;
      font-weight: bold;
    }
    #p{
      text-align: center;
      margin-top: -15px;
      margin-bottom: 45px;
    }
    #span{
      color: white;
    }
    span{
      font-weight: bolder;
      font-size: 25px;
    }
    .subs{
      margin-top: 50px;
      display: grid;
      grid-template-columns: auto auto auto;
      grid-gap: 10px;
    }
    .subs span{
      font-size: 50px;
      display: inline-grid;

    }
    .subs p{
      margin-top: 20px;
      font-size: 19px;
      text-align: center;
    }
    .subs2{
      text-align: center;
      margin-top: 80px;
      margin-bottom: 70px;
      display: grid;
      grid-template-columns: auto auto auto auto;
      justify-content: center;
      grid-gap: 0 60px;
    }
    .subs2 img{
      height: 120px;
      width: 120px;
      border-radius: 50%;
    }
    .subs2 p{
      grid-column: 1/5;
    }
    .isi{
      background-color: rgb(72 ,61 ,139);
      padding: 70px 0;
    }
    .img{
      display: grid;
      grid-template-columns: auto auto;
      grid-gap: 0 120px;
    }
    .img img{
      height: 350px;
      width: 420px;
      margin: 30px;
    }
    .img1 {
      margin: auto;
      color: white;
      font-size: 30px;
    }
    .img1 a{
      color:white;
      border :3px solid white ;
      padding:10px 20px;
      text-decoration:none;
      font-family:sans-serif;
      font-size: 25px;
    }
    .img1 a:hover{
      color: grey;
      font-weight: lighter;
      border :1px solid grey ;
      margin: auto;
    }
  </style>

<body>
  <!-- Navbar -->
<div class="top">
  <h1>Selamat Datang</h1>
  <p id="p"><?php echo date("Y-m-d h:i:sa"); ?></p>
</div>

  <nav class="navbar navbar-expand-lg navbar-light navb sticky-top">
      <div class="container">
              <div class="navbar-nav " id="span" >
                  <span>#PEMINJAMAN</span>
              </div>
      </div>
  </nav>

  <div class="container">
    <div class="subs">
      <div class="1">
        <span>"</span>
      </div>
      <div class="2">
        <p>Kami menyediakan uang untuk orang - orang miskin seperti kalian, kami membuat website ini hanya agar kalian tidak kehilangan ginjal.
         Selain itu kami juga mempunyai beberapa macam mata uang yang sangat tidak kami butuh-kan, mulai dari uang berbagai negara sampai uang digital.</p>
      </div>
      <div class="3">
        <span>"</span>
      </div>
    </div>
    <hr>
    <div class="subs2">
      <p>Didukung Oleh:</p>
      <div class="1">
        <img src="img/btcn.png" alt="">
      </div>
      <div class="2">
        <img src="img/ethr.png" alt="">
      </div>
      <div class="3">
        <img src="img/bni.png" alt="">
      </div>
      <div class="4">
        <img src="img/dlr.png" alt="">
      </div>
    </div>
  </div>
  <div class="isi">
    <div class="container">
      <div class="img">
        <img src="img/pinjam.png" alt="">
        <div class="img1">
          <p>Jadilah orang bungtung, karena kemudahan mendapatkan uang</p>
          <a href="login.php">Mulai Sekarang</a>
        </div>
      </div>
    </div>
  </div>


  <!-- Akhir Navbar -->

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
