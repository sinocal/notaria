<?php
#$value = "3";
$username = "u0gnygm1cr";
$password = "8osYNFkxUBA3pnnJU0Rjbc2HWSQ473dXboBrCwe7mrg";
$accion = "consultar";
#$accion = "guardar";

$url = "https://u0kokp4a5q-u0ym1bllv8-connect.us0-aws.kaleido.io/abis/bcdd1daf-cb32-434c-422d-7971a06503b2/0xf4851abc4f2d111549d4b5d398fe07a6c1edb2bd/$accion?kld-from=0xcb7f8149e5e0521801f43ead796faccd91c83c7e&kld-sync=true";

$data = array('_datosRegistrar' => $value);

$ch = curl_init();
$data_string = json_encode($data);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_USERPWD, "$username:$password");
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

$result = curl_exec($ch);
curl_close($ch);

//$respuesta = json_decode($result);
//echo $respuesta;

//print_r($result);

?>