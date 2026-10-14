<?php 
$sql = 'SELECT * FROM userss' ;
$result = mysqli_query($conn, $sql);
$userss = mysqli_fetch_all($result, MYSQLI_ASSOC);
