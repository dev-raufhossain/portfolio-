<?php
$hostname='localhost';
$username='root';
$password='';
$dbname='db_rauf_protfolio';
$conn = mysqli_connect($hostname,$username,$password, $dbname);
if(!$conn){
    die('Can not connect mysql server:'.mysqli_error());
}

?>