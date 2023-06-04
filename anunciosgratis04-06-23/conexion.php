<?php
$link = new mysqli("localhost", "root", "", "anunciosgratis");
 
// Check connection
if($link === false){
    die("ERROR: No se ha podido conectar a la base de datos. " . mysqli_connect_error());
}
 
// Print host information // si lo descomentas te avisa si se conecta bien a la base de datos.
 // echo "Connect Successfully. Host info: " . mysqli_get_host_info($link);
?>