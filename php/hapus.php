<?php
include 'koneksi.php';
$id = $_GET['id'];
$ins=mysqli_query($host, "DELETE FROM tb_mu WHERE id_mu='$id'");
if($ins){
  echo "<script>alert('Data berhasil di HAPUS'); window.location=('../tambah.php');</script>";
}

?>
