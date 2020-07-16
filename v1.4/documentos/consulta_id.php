<?php

require('database/conn.php');
$result = mysqli_query($conn, "SELECT MAX(`id`) FROM poderes_bancarios");
$extract= mysqli_fetch_array($result)[0] + 1;
print_r($extract);
?>