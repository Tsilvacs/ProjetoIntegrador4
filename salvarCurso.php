<?php

$email = $_GET['email'];
$curso = $_GET['curso'];

if (!$email || !$curso) {
    header('Location: indexAluno.html?erro');
    return;
}

include_once("conexaoCurso.php");

$query = "INSERT INTO cursoalunos(email, curso) VALUES ('{$email}', '$curso')";

if (mysqli_query($conexaoCursos, $query)) {
    header('Location: mainAluno.php');
    return;
} else {
    echo"<script>alert('Erro!'); window.location='indexAluno.html';</script>";
    return;
}