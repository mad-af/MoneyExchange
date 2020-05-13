<?php
session_start();
include('php/koneksi.php');


   $url=$_SERVER['REQUEST_URI'];
   header("Refresh: 120; URL=$url");


if(!isset($_SESSION["login"])){
  Header("location:index.php");
  exit;
}
$id         = $_SESSION['id'];
$ins=mysqli_query($host, "SELECT * FROM user WHERE id='$id'");
   $row=mysqli_fetch_array($ins);

   $dompet=$row['dompet'];

$mu=mysqli_query($host, "SELECT * FROM tb_mu");

$result = mysqli_query($host,"select * from user inner join tb_pesan on user.id=tb_pesan.id_user where id='$id' ORDER BY id_pesan DESC");
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>PEMINJAMAN|Uang</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>
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
  .navb a{
    color:white;
    font-weight: bold;
    margin-right: 20px;
  }
  .navb a:hover{

  }
  .modal-backdrop{
    z-index: 1010;
  }
  .modal-dialog{
    margin-top: 200px;
  }
  #modal {
    width: 800px;
    margin-left: -150px;
    margin-top: -150px;
  }
  h1{
    font-size: 50px;
    text-align: center;
    margin-top: 20px;
    font-weight: 600;
  }
  #p{
    text-align: center;
    margin-top: -15px;
  }
  #name{
    text-align: center;
    font-size:40px;
    font-weight: 600;
    margin-top: -10px;
  }
  #span{
    color: white;
  }
  span{
    font-weight: bolder;
    font-size: 25px;
  }
  .dompet{

  }
  .dompet h1{
    font-weight: 600;
  }
  .dompet span{
    font-size: 50px;
    font-weight: 900;
  }
  .dompet p{
    margin-top: -25px;
    font-size: 40px;
    font-weight: 300;
    text-align: center;
  }
  .subs{
    margin-top: 50px;
  }
  .subs span{
    font-size: 50px;
    display: inline-grid;
  }
  .subs p{
    margin-top: -15px;
    text-align: center;
  }

  .batun{
  	border-radius: 0px;
  	padding:10px 15px;
  	background-color: rgba(0, 0 , 0 ,0.015);
    cursor:pointer;
  	display:inline-block;
  	border-top:1px solid ;
    width: 100%;
    text-align: left;
    font-size: 20px;
    font-weight: bold;
  }
  .btn:focus, .btn.focus {
    outline: 0;
    -webkit-box-shadow: 0 0 0 0.2rem rgba(78, 115, 223, 0);
    box-shadow: 0 0 0 0.2rem rgba(78, 115, 223, 0);
  }

#toggle{
	padding:10px 15px;
	background-color: rgba(0, 0 , 0 ,0.03);
  cursor:pointer;
	display:inline-block;
	border-top:1px solid ;
  width: 700px;
  text-align: left;
  font-size: 20px;
  font-weight: bold;
}
#content{
	display:none;
	text-align:center;
	background:#3498db
	color:#fff;
  padding:30px 20px;
	border-radius: 5px;
  width: 700px;
}
  /* TABLE */
  .table{
    margin-top: 5px;
    text-align: center;
  }
  #tbl{
    background-color: rgb(80 ,50 ,150);
    color: white;
  }

  /* AKHIR TABLE */

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
    font-weight: 300;
  }
  .img1 span{
    font-weight: 700;
    font-size: 35px;
    font-style: sans-serif;
  }
  </style>

  <body>
  <!-- Navbar -->
  <div class="top">
  <h1>Selamat Datang</h1>
  <p id="p"><?php echo date("Y-m-d h:i:sa"); ?></p>


  <p id="name"><?php echo $row['usn']; ?></p>

  </div>

  <nav class="navbar navbar-expand-lg navbar-light navb sticky-top">
    <div class="container">
            <div class="navbar-nav " id="span" >
                <span>#PEMINJAMAN</span>
            </div>
            <div class="navb">
              <a href="" data-toggle="modal" data-target="#exampleModal3">SUMBANG</a>
              <a href="" data-toggle="modal" data-target="#exampleModal1">HISTORY</a>
              <a href="php/logout.php">KELUAR</a>



            </div>
    </div>
  </nav>

  <div class="container">

    <div class="dompet">
      <h1>Dompet<span>Mu</span></h1><br>
      <p ><?php echo $dompet; ?>  IDR</p>
    </div>

  <div class="subs">

    <div class="2">
      <h1>Tabel <span>PEMINJAMAN</span></h1>
      <p>Tabel ini merupakan sebuah alat untuk mempermudah peminjaman uang yang kalian butuhkan</p>
    </div>

  </div>
  <hr>


  <table class="table table-striped">
  <thead>
    <tr id="tbl">
      <th scope="col">NO</th>
      <th scope="col">MATA UANG</th>
      <th scope="col">TERSEDIA</th>
      <th scope="col">SETARA(IDR)</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $no = 1;
    while ($row=mysqli_fetch_assoc($mu))
    {
       echo "<tr>";
       echo "<th>".$no."</th>";
    ?>


      <th scope="row"><a href="" data-toggle="modal" data-target="#exampleModa<?=$no?>"><?php echo $row['mu']; ?></a></th>
      <?php
         echo "<td>".$row['sedia']."</td>";
         echo "<td>".$row['setara']."</td>";
      ?>
      <div class="modal fade" id="exampleModa<?=$no++?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">PEMINJAMAN</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

              <p>Yang Dibutuhkan :</p>
              <p style="text-align:center;">Dalam Mata Uang<span> <?php echo $row['mu'] ?></span></p>

              <form class="" action="php/kirim.php" method="post">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <input type="hidden" name="id_mu" value="<?php echo $row['id_mu']; ?>">
                <center><input type="number" name="nilai" value=""></center>
              <br>
            </div>
            <div class="modal-footer">
              <input type="submit" name="submit" class="btn btn-primary" value="KIRIM">
              </form>
            </div>
          </div>
        </div>
      </div>
    </tr>


    <?php
    }

    ?>
  </tbody>
</table>

<!-- Modal -->



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
      <div class="img1">
        <p><span>Terimakasih</span> karena membantu menghabiskan uang kami, dan beralih lah ke mode <span>Premium</span> untuk bisa mengambil lebih banyak lagi</p>
      </div>
      <img src="img/pinjam.png" alt="">
    </div>
  </div>
  </div>

  <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content" id="modal">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">SUMBANG</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            DompetMu :
            <span><?php echo $dompet; ?>  IDR</span>
            <p style="text-align:center;">Hanya untuk (IDR)</p>
            <form class="" action="php/kirim2.php" method="post">
              <input type="hidden" name="id" value="<?php echo $id; ?>">
              <!-- <input type="hidden" name="id_mu" value="<?php echo $row['id_mu']; ?>"> -->
              <select class="" name="id_mu">
                <?php foreach ($mu as $list):?>
                    <option value="<?php echo $list['id_mu']; ?>"><?php echo $list['mu']; ?></option>
                <?php endforeach; ?>
              </select>
            <center><input type="number" name="dompet" value=""></center>
        </div>

            <br>
        <div class="modal-footer">
            <input type="submit" name="submit" class="btn btn-primary" value="KIRIM">
            </form>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content" id="modal">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">HISTORY</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

  <?php $n=1;
   while($buku = mysqli_fetch_array($result)){?>
          <div class="">
            <button class="btn batun" type="button" data-toggle="collapse" data-target="#collapseExample<?=$n;?>" aria-expanded="false" aria-controls="collapseExample">
              <?php echo $buku['judul'];?>
            </button>
            <div class="collapse" id="collapseExample<?=$n;?>">
              <div class="card card-body">
                <?php echo $buku['isi'];?>
                <br>
                <br>
                <p style="text-align:right;"><?php echo $buku['tanggal'];?></p>
              </div>
            </div>
          </div>

            <?php $n++; }
          ?>

        </div>
        <div class="modal-footer">
        </div>
      </div>
    </div>
  </div>


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
  <script src="js/demo/chart-bar-demo.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>


</body>

</html>
