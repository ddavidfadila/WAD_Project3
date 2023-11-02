<?php 
    $conn = mysqli_connect("localhost:3307", "root", "", "wad_project3");
    $result = mysqli_query($conn, "SELECT * FROM student");

    // $data = mysqli_fetch_object($result);
?>

<!DOCTYPE html>
<html lang="en">

<body>
    <h1>Ini Adalah Halaman Index Data</h1>
<table border>
  <tr>
    <th>Nomor</th>
    <th>NIM</th>
    <th>Nama</th>
    <th>Alamat</th>
  </tr>
  <?php while( $data = mysqli_fetch_object($result)){
    ?>
  <tr>
    <td><?php echo $data->id ?></td>
    <td><?php echo $data->nim ?></td>
    <td><?php echo $data->name ?></td>
    <td><?php echo $data->address ?></td>
  </tr>
  <?php
  }
?>
</table>
    
</body>
</html>