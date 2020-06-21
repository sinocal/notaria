<?php

$nombre_emisor = $_POST['nombre_emisor'];
$rut_emisor = $_POST['rut_emisor'];
$apellido_paterno_emisor = $_POST['apellido_paterno_emisor'];
$direccion_emisor = $_POST['direccion_emisor'];
$apellido_materno_emisor = $_POST['apellido_materno_emisor'];
$comuna_emisor = $_POST['comuna_emisor'];
$nombre_rececptor = $_POST['nombre_rececptor'];
$rut_receptor = $_POST['rut_receptor'];
$apellido_paterno_receptor = $_POST['apellido_paterno_receptor'];
$apellido_materno_receptor = $_POST['apellido_materno_receptor'];
$banco = $_POST['banco'];

require('database/conn.php');

$sql = "INSERT INTO `poderes_bancarios`(`rut_emisor`,`nombre_emisor`,`apellido_paterno_emisor`,`apellido_materno_emisor`,
  `direccion_emisor`,`comuna_emisor`,`nombre_receptor`,`apellido_paterno_receptor`,`apellido_materno_receptor`,
  `rut_receptor`, `banco`) VALUES ('$rut_emisor','$nombre_emisor','$apellido_paterno_emisor','$apellido_materno_emisor',
  '$direccion_emisor','$comuna_emisor','$nombre_rececptor','$apellido_paterno_receptor','$apellido_materno_receptor',
  '$rut_receptor','$banco')";

  if (!mysqli_query($conn,$sql)) {
      echo "Error: ".$sql."<br>";
    }
mysqli_close($conn);



echo "Yo $nombre_emisor $apellido_paterno_emisor $apellido_materno_emisor
rut: $rut_emisor autorizo a $nombre_rececptor $apellido_paterno_receptor
$apellido_materno_receptor rut: $rut_receptor a representarme
ante el banco $banco";

 ?>
