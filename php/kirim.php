<?php
include 'koneksi.php';
// menyimpan data kedalam variabel
if (isset($_POST["submit"])) {
  // code...
  $id    = $_POST['id'];
  $id_mu = $_POST['id_mu'];
  $nilai = $_POST['nilai'];

$ins=mysqli_query($host, "SELECT * FROM user WHERE id='$id'");
$mu=mysqli_query($host, "SELECT * FROM tb_mu WHERE id_mu='$id_mu'");
$row=mysqli_fetch_array($mu);
$ro=mysqli_fetch_array($ins);

$uang=$row['sedia'];
$banyak=$row['setara'];
$dompet=$ro['dompet'];

$name="Terimakasih Telah Meminjam";
$waktu='"Terimakasih karena anda telah menerima sebesar Rp. '.$nilai*$banyak.' membantu kami untuk mencegah jual beli ginjal,
          dan Selamat Anda mendapatkan pahala karena anda telah membantu mereka dengan iklash."';
$adm= $ro['usn'].", Telah Meminjam";
$admi= "Web ini telah Berkurang uang sebesar Rp. ".$nilai*$banyak;
$tgl=date("Y-m-d h:i:sa");
if ($uang <= $nilai) {
  echo "<script>alert('TERLALU BANYAK'); window.location=('../sd.php');</script>";
}else {
  $hasil=$uang-$nilai;
  $ins=mysqli_query($host, "UPDATE tb_mu SET sedia='$hasil' where id_mu='$id_mu' ");
  if ($ins) {
    $dompe=$nilai*$banyak+$dompet;
    $in=mysqli_query($host, "UPDATE user SET dompet='$dompe' where id='$id' ");
    if ($in) {
      mysqli_query($host, "insert into tb_pesan (judul, isi, id_user, tanggal) values ('$name','$waktu','$id', '$tgl')");
      mysqli_query($host, "insert into tb_admin (judul, isi, tanggal) values ('$adm','$admi','$tgl')");
        echo "<script>alert('BERHASIL DI KIRIM'); window.location=('../sd.php');</script>";

    }else {
      echo "<script>alert('GAK BISA'); window.location=('../sd.php');</script>";
    }
  }else {
    echo "<script>alert('GAGAL'); window.location=('../sd.php');</script>";
  }
}
}


?>
