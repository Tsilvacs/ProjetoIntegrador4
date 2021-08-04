<?php

$email = $_POST['email'];
$senha = $_POST['senha'];
$opcaoLogin = $_POST['opcaoLogin'];

if (!$email || !$senha || !$opcaoLogin) {
    echo"<script>alert('Insira os dados corretamente!'); window.location=cadastroAluno.html;</script>";
    return;
}

if ($opcaoLogin == "professor") {
    include('conexaoprof.php');

    $usuarioProf = mysqli_real_escape_string($conexaoProf, $email);
    $senhaProf = mysqli_real_escape_string($conexaoProf, $senha);

    $query ="select * from professor where emailprof= '{$usuarioProf}'";

    $result = mysqli_query($conexaoProf, $query);

    $row = mysqli_num_rows($result);
 
    if($row == 1) {
        $update = "UPDATE professor SET senhaprof='{$senhaProf}' WHERE emailprof = '{$usuarioProf}'";
        if (mysqli_query($conexaoProf, $update)) {
            echo"<script>alert('Senha alterada!'); window.location=cadastroAluno.html;</script>";
            return;
        } else {
            echo"<script>alert('Erro ocorrido!');</script>";
            return;
        }
    } else {
        echo"<script>alert('Email não encontrado!'); window.location=cadastroAluno.html;</script>";
        return;
    }
} else {
    include('conexaoAluno.php');

    //
}