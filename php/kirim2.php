<?php
include 'koneksi.php';
// menyimpan data kedalam variabel
if (isset($_POST["submit"])) {
  // code...
  $id    = $_POST['id'];
  $id_mu = $_POST['id_mu'];
  $nilai = $_POST['dompet'];

$ins=mysqli_query($host, "SELECT * FROM user WHERE id='$id'");
$mu=mysqli_query($host, "SELECT * FROM tb_mu WHERE id_mu='$id_mu'");
$row=mysqli_fetch_array($mu);
$ro=mysqli_fetch_array($ins);

$uang=$row['sedia'];
$banyak=$row['setara'];
$dompet=$ro['dompet'];

$name="Terimakasih Atas Sumbangan Anda";
$waktu='"Terimakasih karena anda telah menymbang sebesar Rp. '.$nilai.' membantu kami untuk mencegah jual beli ginjal,
          dan Selamat Anda mendapatkan pahala karena anda telah membantu mereka dengan iklash."';
$adm= $ro['usn'].", Telah Menyumbang";
$admi= "Web ini telah tersumbangkan uang sebesar Rp. ".$nilai;

if ($dompet < $nilai && $dompet == $nilai) {
  echo "<script>alert('DOMPET ANDA TERLALU KURANG'); window.location=('../sd.php');</script>";
}else {
  if ($nilai < $banyak) {
  echo "<script>alert('NOMINAL TERLALU KURANG'); window.location=('../sd.php');</script>";
}else {
  $hasil=$dompet - $nilai;
  $ins=mysqli_query($host, "UPDATE user SET dompet='$hasil' where id='$id' ");
  if ($ins) {
    $dompe=$nilai/$banyak+$uang;
    $in=mysqli_query($host, "UPDATE tb_mu SET sedia='$dompe' where id_mu='$id_mu' ");
    if ($in) {
      $pesam=mysqli_query($host, "insert into tb_pesan (judul, isi, id_user) values ('$name','$waktu','$id')");
      if ($pesam) {
        $admin=mysqli_query($host, "insert into tb_admin (judul, isi) values ('$adm','$admi')");
        if ($admin) {
        echo "<script>alert('BERHASIL DI KIRIM'); window.location=('../sd.php');</script>";
      }else {
        echo "Gak Bisa";
      }
      }
    }else {
      echo "<script>alert('GAK BISA'); window.location=('../sd.php');</script>";
    }
  }else {
    echo "<script>alert('GAGAL'); window.location=('../sd.php');</script>";
  }
}
}
}


?>
