<?php   
include_once "conexaoCurso.php";?>
<html>
<body>
<?php
$Nome = $_POST['nome'];
$Instituicao = $_POST['instituicao'];
$Coordenador = $_POST['coordenador'];
$Nota = $_POST['nota'];
$Serie = $_POST['serie'];
$Freq = $_POST['frequencia'];

if (!$Nome || !$Instituicao){
    echo"<script>alert('Insira os dados corretamente!'); window.location=cadastroAluno.html;</script>";
    
    return;
}

$conexaoCursos = mysqli_connect($hostname,$user,$password,$database);

mysqli_select_db($conexaoCursos,'$database');
$sql ="INSERT INTO tabcursos(Instituicao,Nome,Coordenador,Freq,Nota,Serie) VALUES ('$Instituicao','$Nome','$Coordenador','$Freq','$Nota','$Serie')";

if(mysqli_query($conexaoCursos,$sql)){
    echo"<script>alert('Dados salvos com SUCESSO !'); window.location=cadastroAluno.html;</script>";
}
else{
    echo "Deu erro: ".$sql."<br>". mysqli_error($conexaoCursos);}
mysqli_close($conexaoCursos);
?>
</body>
</html>