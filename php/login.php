<?php
session_start();
if(isset($_POST['submit'])){
// mengaktifkan session php


// menghubungkan dengan koneksi
include 'koneksi.php';

// menangkap data yang dikirim dari form
$email = $_POST['email'];
$password = $_POST['password'];

// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($host,"select * from user where email='$email' and pass='$password'");



// menghitung jumlah data yang ditemukan

if($row = mysqli_fetch_array($data)){

	$_SESSION['id'] = $row['id'];
	$_SESSION['login'] = true;

	header("location:../sd.php");
}if ($email == 'admin@a'&&$password=='admin') {

 	$_SESSION['admin'] = true;
 	header('location:../tambah.php');
	// code...
}
else{
	  echo "<script>alert('Email atau Password salah!!'); window.location=('../login.php') </script>";
}
}
?>
