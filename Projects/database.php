<?php 
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'ecom';


try{
$conn = new mysqli($servername,$username,$password,$dbname);
}catch(Exception $e)
{
 echo 'Error 404 ';
}
?>