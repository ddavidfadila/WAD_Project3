<?php 
    $conn = mysqli_connect("localhost:3307", "root", "", "wad_project3");
    $result = mysqli_query($conn, "SELECT * FROM student");
    var_dump(mysqli_fetch_object($result));
?>