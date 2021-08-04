<?php
include('conexao.php');

if(empty($_POST['Ausuario']) || empty($_POST['senhaA'])) {
    header('Location: indexAluno.html');
    exit();
}
$usuarioA = mysqli_real_escape_string($conexaoA, $_POST['Ausuario']);
$senhaA = mysqli_real_escape_string($conexaoA, $_POST['senhaA']);

$query ="select usuario_id, email from usuarioalunos where email= '{$usuarioA}' and senha = '{$senhaA}'";

$result = mysqli_query($conexaoA,$query);

$row = mysqli_num_rows($result);
 
if($row == 1) {
session_start();
$cb = base64_encode($usuarioA);
			setcookie("login", $cb, time()+3600*24);
    header('Location: mainAluno.php');
    exit(); 
}else {
    header('Location: indexAluno.html');
    exit();
}