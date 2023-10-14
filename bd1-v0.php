<?php
error_reporting(E_ALL);
ini_set('display_errors',E_ALL);

/*
$con = mysqli_init();
mysqli_ssl_set($con,NULL,NULL, "{path to CA cert}", NULL, NULL);
mysqli_real_connect($conn, "lmatebd1.mysql.database.azure.com", "miuserbd", "{your_password}", "{your_database}", 3306, MYSQLI_CLIENT_SSL);
*/

/*
$conn = mysqli_init(); 
mysqli_ssl_set($conn,NULL,NULL, "/home/site/wwwroot/ssl/DigiCertGlobalRootCAP1.crt.pem", NULL, NULL); 
mysqli_real_connect($conn, "lmatephpbdp1-server.mysql.database.azure.com", "miuserbd", "Afdoydli88$", "miespacio_base", 3306, MYSQLI_CLIENT_SSL);
*/

$conn = mysqli_init(); 
mysqli_ssl_set($conn,NULL,NULL, env(), NULL, NULL); 
mysqli_real_connect($conn, "lmatephpbdp1-server.mysql.database.azure.com", "miuserbd", "Afdoydli88$", "miespacio_base", 3306, MYSQLI_CLIENT_SSL);

echo 'Éxito... ' . $conn->host_info . "\n";

exit;



?>