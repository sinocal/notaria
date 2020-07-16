<?php
require('database/conn.php');

//$usuario = 123;
$tabla="";
$query = "SELECT `id`,`rut_emisor`,`rut_receptor`, `banco`, `estado` FROM `poderes_bancarios` WHERE rut_emisor=$usuario";
$result = mysqli_query($conn,$query);

if(mysqli_num_rows($result) > 0){
    $tabla.= '
      <table class="tabla">
         <thead>
            <th>Rut emisor</th>
            <th>Rut receptor</th>
            <th>Banco</th>
            <th>Estado</th>
         </thead>';

   //se crean filas de la tabla segun existan los resultados de la consulta
   while ($fila_documentos = $result->fetch_assoc()) {
      $tabla.= '
      <tr>
         <td>'.$fila_documentos['rut_emisor'].'</td>
         <td>'.$fila_documentos['rut_receptor'].'</td>
         <td>'.$fila_documentos['banco'].'</td>
         <td>'.$fila_documentos['estado'].'</td>
         <td><input type="submit" value="Ver validez" id="'.$fila_documentos['id'].'" onclick="buscar_detalles(this.id)"></td>
         


      </tr>
      ';

   }
   $tabla.='
   <tr class="oculto">
      <input type="hidden" name="casilla_envio" class="casilla_envio" value="">
   </tr>
   ';

   $tabla.= '</table>'; //cierre de la tabla
} else {
    $tabla = "No se encontraron coincidencias";
}
 
echo $tabla; //se devuelve la tabla ya construida para mostrarla en formato html
mysqli_close($conn); //se cierra la conexion con la base de datos
?>