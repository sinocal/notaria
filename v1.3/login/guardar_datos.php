<?php
$names = $_POST['names'];
$rut = $_POST['rut'];
$paternal_last_name = $_POST['paternal_last_name'];
$maternal_last_name = $_POST['maternal_last_name'];
$telefono = $_POST['telefono'];
$address = $_POST['address'];
$ciudad = $_POST['ciudad'];
$comuna = $_POST['comuna'];
$sexo = $_POST['sexo'];
$email = $_POST['email'];
$pass = $_POST['pass'];

//comprobar si los email son iguales
//TODO: convertir en pagina html para que sea mas bonito; revisar que esten llenados todos los valores del formulario


$hash = password_hash($pass,PASSWORD_DEFAULT);

require('../database/conn.php');

$sql = "INSERT INTO `user`(`rut`,`names`,`paternal_last_name`,`maternal_last_name`,`telefono`,`address`,`comuna`,`ciudad`,`sexo`,`email`,`password`)
VALUES ($rut,'$names','$paternal_last_name','$maternal_last_name',$telefono,'$address','$comuna','$ciudad',$sexo,'$email','$hash')";

if (mysqli_query($conn,$sql)) {
    // datos guardados correctamente
    echo "<h1>Se creo exitosamente el nuevo usuario</h1> <a href='../index.html'>OK</a>";

}else {
    // code...
    echo "Error: ".$sql."<br>";
}
mysqli_close($conn);


?>
