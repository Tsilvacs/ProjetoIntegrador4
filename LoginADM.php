<?php
session_start();
include('conexaoAdm.php');

if(empty($_POST['usuarioadm']) || empty($_POST['senhaadm'])) {
    header('Location: indexAdm.html');
    exit();
}
$usuarioAdm = mysqli_real_escape_string($conexaoAdm, $_POST['usuarioadm']);
$senhaAdm = mysqli_real_escape_string($conexaoAdm, $_POST['senhaadm']);

$query ="select id, usuarioAdm from admin where usuarioAdm= '{$usuarioAdm}' and senhaadm = md5('{$senhaAdm}')";

$result = mysqli_query($conexaoAdm,$query);

$row = mysqli_num_rows($result);
 
if($row == 1) {
    $_SESSION['usuarioAdm'] = $usuarioAdm;    
    header('Location: mainAdmin.php');
    exit(); 
}else {
    $_SESSION['nao_autenticado']= true;
    header('Location: indexAdm.html');
    exit();
}