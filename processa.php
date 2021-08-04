<?php   
include_once "conexao.php";?>
<html>
<body>
<?php
$nome = $_POST['nome'];
$email= $_POST['email'];
$senha= $_POST['senha'];
$repitasenha= $_POST['repetir_senha'];
$cpf= $_POST['cpf'];
$rg= $_POST['rg'];
$nascimento= $_POST['nascimento'];
$endereço= $_POST['endereço'];
$telefone= $_POST['telefone'];

if (!$nome){
    echo"<script>alert('Insira o Nome corretamente!'); window.location=cadastroAluno.html;</script>";
    
    return;
}
if (!$email ){
    echo"<script>alert('Insira o E-mail corretamente!'); window.location=cadastroAluno.html;</script>";
    
    return;
}
if (!$senha ){
    echo"<script>alert('Insira a Senha corretamente!'); window.location=cadastroAluno.html;</script>";
    
    return;
}
if (!$repitasenha ){
    echo"<script>alert('Repita a Senha corretamente!'); window.location=cadastroAluno.html;</script>";
    
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



$conexaoA = mysqli_connect($hostname,$user,$password,$database);

mysqli_select_db($conexaoA,'$database');
$sql ="INSERT INTO usuarioalunos(nome,email,senha,repetir_senha,cpf,rg,nascimento,endereço,telefone) VALUES ('$nome','$email','$senha','$repitasenha','$cpf','$rg','$nascimento','$endereço','$telefone')";

if(mysqli_query($conexaoA,$sql)){
    echo"<script>alert('Dados salvos com SUCESSO !'); window.location=cadastroAluno.html;</script>";
}
else{
    echo "Deu erro: ".$sql."<br>". mysqli_error($conexaoA);}
mysqli_close($conexaoA);
?>
</body>
</html>