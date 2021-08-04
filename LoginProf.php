<?php
include('conexaoprof.php');

if(empty($_POST['usuarioprof']) || empty($_POST['senhaprof'])) {
    header('Location: indexProfessor.html');
    exit();
}
$usuarioProf = mysqli_real_escape_string($conexaoProf, $_POST['usuarioprof']);
$senhaProf = mysqli_real_escape_string($conexaoProf, $_POST['senhaprof']);

$query ="select id, emailprof from professor where emailprof= '{$usuarioProf}' and senhaprof = '{$senhaProf}'";

$result = mysqli_query($conexaoProf,$query);

$row = mysqli_num_rows($result);
 
if($row == 1) {
session_start();
$cb = base64_encode($usuarioProf);
            setcookie("login", $cb, time()+3600*24);
    header('Location: mainProfessor.php');
    exit(); 
}else {
    header('Location: indexProfessor.html');
    exit();
}