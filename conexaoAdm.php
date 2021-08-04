<?php
 
$hostname="localhost";
$user= "root";
$password="";
$database="loginadm";

$conexaoAdm= mysqli_connect($hostname,$user,$password,$database);

if(!$conexaoAdm){
    echo"Falha na conexão com o Banco de dados";
}

include_once("conexao.php");
?>