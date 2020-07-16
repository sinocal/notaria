<?php

$rut = $_POST['rut'];
$pass = $_POST['pass'];

session_start();
$_SESSION['usuario'] = $rut;

require('../database/conn.php');

$query = "SELECT rut,password FROM user WHERE rut = '$rut'";
$result = mysqli_query($conn,$query);

$row = mysqli_fetch_assoc($result);
$clave = $row['password'];

if (password_verify($pass, $clave)) {
    echo "claves iguales";
    header("location: ../menu_documents.html");
}else {
    echo '<h1>El nombre de usuario y/o la contraseña es incorrecta</h1>
          <a href="../index.html">Aceptar</a>';
    //header("location: index.html");
}
 ?>
