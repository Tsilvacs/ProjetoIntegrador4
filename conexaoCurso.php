<?php
 
$hostname="localhost";
$user= "root";
$password="";
$database="cursos";

$conexaoCursos= mysqli_connect($hostname,$user,$password,$database);

if(!$conexaoCursos){
    echo"Falha na conexão com o Banco de dados";
}

include_once("conexaoCurso.php");
?>