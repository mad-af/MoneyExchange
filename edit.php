<?php
include("php/koneksi.php");

$id         = $_GET['id'];
$ins=mysqli_query($host, "SELECT * FROM tb_soal WHERE id='$id'");
  while ($row=mysqli_fetch_array($ins))
  {
?>
<!DOCTYPE html>
<html>
<head>

</head>
<body>


	<form class="user" action="php/edit.php" method="post">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

			<div class="form-group">
				<h5>materi</h5>
				<input type="text" name="name" class="form-control form-control-user" id="exampleFirstName" value="<?php echo $row['nama']; ?> required">
			</div>

			<div class="form-group">
				<h5>waktu</h5>
				<input type="text" name="waktu" class="form-control form-control-user" id="exampleFirstName" value="<?php echo $row['waktu']; ?>" required>
			</div>

			<div class="form-group">
				<h5>soal_1</h5>
				<input type="text" name="sl_1" class="form-control form-control-user" id="exampleFirstName" value="<?php echo $row['sl_1']; ?>" required>
			</div>

			<div class="form-group">
				<h5>jawab_1</h5>
				<input type="text" name="jwb_1" class="form-control form-control-user" id="exampleFirstName" value="<?php echo $row['jwb_1']; ?>" required>
			</div>

			<div class="form-group">
				<h5>soal_2</h5>
				<input type="text" name="sl_2" class="form-control form-control-user" id="exampleFirstName" value="<?php echo $row['sl_2']; ?>" required>
			</div>

			<div class="form-group">
				<h5>jawab_2</h5>
				<input type="text" name="jwb_2" class="form-control form-control-user" id="exampleFirstName" value="<?php echo $row['jwb_2']; ?>" required>
			</div>

		<input type="submit" name="submit" class="btn btn-primary btn-clrDasar btn-user btn-block" value="submit">
	</form>
</body>
</html>
<?php
} ?>
