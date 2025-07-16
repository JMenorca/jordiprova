<?php
$host="localhost";
$user="root";
$pass="";
$db="jordiprova";

$CON=mysqli_connect($host,$user,$pass,$db);

if($CON) {	
    echo "";
}
else  
{
echo"DB no conectada";
}

?>