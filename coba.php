<?php
include('php/koneksi.php');

$result = mysqli_query($host, "SELECT * FROM tb_mu");
?>
<table cellpadding="5" cellspacing="0" border="1">
  <tr>
      <th>Nama</th>
      <th>Harga</th>

  </tr>
  <?php  while($buku = mysqli_fetch_array($result)){?>
  <tr>
      <td><?php echo $buku["mu"];?></td>


  </tr>
  <?php }?>


  ?>
