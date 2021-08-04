<?php
 
$hostname="localhost";
$user= "root";
$password="";
$database="loginprof";

$conexaoProf= mysqli_connect($hostname,$user,$password,$database);

if(!$conexaoProf){
    echo"Falha na conexão com o Banco de dados";
}

include_once("conexaoprof.php");
?>