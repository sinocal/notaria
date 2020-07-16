<?php
session_id(123);
session_start();

// initialize session variables
$_SESSION['user'] = 'nicolas';

?>
<a href="pagina2.php">Pagina 2</a>