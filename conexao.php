<?php
 
$hostname="localhost";
$user= "root";
$password="";
$database="loginalunos";

$conexaoA= mysqli_connect($hostname,$user,$password,$database);

if(!$conexaoA){
    echo"Falha na conexão com o Banco de dados";
}

include_once("conexao.php");
?>
