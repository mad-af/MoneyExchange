<?php
if(isset($_POST["submit"])){
include("koneksi.php");

$name = $_POST['name'];
$waktu = $_POST['email'];
$sl_1 = $_POST['pass'];

$nam="Ada Yang Baru Nih";
$wakt='"Ayo Segera cek index sebelum pinjaman-nya kehabisa"';
$adm= "Admin Telah Berhasil Upload";
$admi= "Barang sudah di siap kan, tinggal menunggu mangsa";

 if(empty($name) or empty($waktu)){

  echo "<script>alert('Form tidak boleh kosong!!! Silakan ulangi lagi'); window.location=('../tambah.php') </script>";
 }else{

   $ins = mysqli_query($host,"insert into tb_mu (mu, sedia, setara) values ('$name','$waktu','$sl_1')");

  if($ins){

  mysqli_query($host, "insert into tb_pesan (judul, isi, level) values ('$nam','$wakt','user')");
  mysqli_query($host, "insert into tb_pesan (judul, isi, level) values ('$adm','$admi','admin')");
    echo "<script>alert('Data berhasil di Tambah'); window.location=('../tambah.php');</script>";

  }
  else {
    echo "Belum Masuk";
  }
 }

}
?>
