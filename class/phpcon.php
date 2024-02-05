<?php


$serverName ="localhost";
$userName = "root";
$password = "";
$dbName = "aswtdb";

$connectt = new mysqli("localhost","root","","aswtdb");


if(mysqli_connect_errno()){
    echo "failure";
exit();
}
echo 
"Wow successful connection";

?>







?>