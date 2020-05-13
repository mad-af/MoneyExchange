<?php
if(isset($_POST["submit"])){
include("koneksi.php");

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$adm= $name.", Telah Bergabung";
$admi= "Telah ada Anggota Baru yang baru daftar";

 if(empty($email) or empty($password)){

  echo "<script>alert('Form tidak boleh kosong!!! Silakan ulangi lagi'); window.location=('../register.html') </script>";
 }else{
  $tes = mysqli_num_rows(mysqli_query($host,"SELECT * FROM user WHERE email=='$email'"));
  if (!$tes>0) {
    // code...

  $ins = mysqli_query($host,"insert into user(usn, email, pass, level) values ('$name','$email','$password', 'user')");
  if($ins){



    $hasil = mysqli_query($host, "select max(id) as last_id from user limit 1");
    $row = mysqli_fetch_array($hasil);
    $lastId = $row['last_id'];

    $pesam=mysqli_query($host, "insert into tb_pesan (id_user,judul,isi) values ('$lastId','Selamat Bergabung','Terimakasih karena telah mempercayai kami, dan nikmati fasilitas pinjaman yang ada')");
    if ($pesam) {
      $admin=mysqli_query($host, "insert into tb_admin (judul, isi) values ('$adm','$admi','0')");
      if ($admin) {
        echo "<script>alert('Data berhasil di Tambah'); window.location=('../login.php');</script>";
      }
    }

  }
  else {
    echo "Belum Masuk";
  }
}else {
        echo "<script>alert('Email Telah Digunakan'); window.location=('../index.php');</script>";
}
}
}
?>
