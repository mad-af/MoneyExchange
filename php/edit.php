<?php
include 'koneksi.php';
// menyimpan data kedalam variabel
if (isset($_POST["submit"])) {
  // code...


$id    = $_POST['id'];
$name            = $_POST['name'];
$waktu           = $_POST['email'];
$sl_1        = $_POST['pass'];

// query SQL untuk insert data
$query="UPDATE tb_mu SET mu='$name', sedia='$waktu', setara='$sl_1'  where id_mu='$id' ";
$ins=mysqli_query($host, $query);
// mengalihkan ke halaman index.php
if($ins){
  echo "<script>alert('Data berhasil di Edit'); window.location=('../tambah.php');</script>";
}
else {
  echo "Belum Masuk";
}
}
?>
