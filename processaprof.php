<?php   
include_once "conexaoprof.php";?>
<html>
<body>
<?php
$nome = $_POST['nome'];
$emailprof= $_POST['email'];
$senhaprof= $_POST['senha'];
$cpf= $_POST['cpf'];
$rg= $_POST['rg'];
$nascimento= $_POST['nascimento'];
$endereço= $_POST['endereço'];
$telefone= $_POST['telefone'];
$complemento= $_POST['complemento'];
$bairro= $_POST['bairro'];

if (!$nome){
    echo"<script>alert('Insira o Nome corretamente!'); window.location=cadastroAluno.html;</script>";
    
    return;
}
if (!$emailprof ){
    echo"<script>alert('Insira o E-mail corretamente!'); window.location=cadastroAluno.html;</script>";
    
    return;
}
if (!$senhaprof ){
    echo"<script>alert('Insira a Senha corretamente!'); window.location=cadastroAluno.html;</script>";
    
    return;
}
if (!$bairro ){
    echo"<script>alert('Insira o Bairro corretamente!'); window.location=cadastroAluno.html;</script>";
    
    return;
}
if (!$cpf ){
    echo"<script>alert('Insira o CPF corretamente!'); window.location=cadastroAluno.html;</script>";
    
    return;
}
if (!$rg ){
    echo"<script>alert('Insira o RG corretamente!'); window.location=cadastroAluno.html;</script>";
    
    return;
}
if (!$nascimento ){
    echo"<script>alert('Insira a Data de Nascimento corretamente!'); window.location=cadastroAluno.html;</script>";
    
    return;
}
if (!$endereço ){
    echo"<script>alert('Insira o Endereço corretamente!'); window.location=cadastroAluno.html;</script>";
    
    return;
}

if (!$telefone ) {
    echo"<script>alert('Insira o Telefone corretamente!'); window.location=cadastroAluno.html;</script>";
    
    return;
}

$conexaoProf= mysqli_connect($hostname,$user,$password,$database);

mysqli_select_db($conexaoProf,'$database');
$sql ="INSERT INTO professor(nome,emailprof,senhaprof,cpf,rg,nascimento,endereço,telefone,complemento,bairro) VALUES ('$nome','$emailprof','$senhaprof','$cpf','$rg','$nascimento','$endereço','$telefone','$complemento','$bairro')";

if(mysqli_query($conexaoProf,$sql)){
    echo"<script>alert('Dados salvos com SUCESSO !'); window.location=cadastrarProfessor.html;</script>";
}
else{
    echo "Deu erro: ".$sql."<br>". mysqli_error($conexaoProf);}
mysqli_close($conexaoProf);
?>
</body>
</html>