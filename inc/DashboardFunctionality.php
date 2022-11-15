<?php 
$sql = 'SELECT * FROM usuario WHERE username="'. $_SESSION['username'].'"';
$result=mysqli_query($conn, $sql);
$userData=mysqli_fetch_all($result, MYSQLI_ASSOC);
?>