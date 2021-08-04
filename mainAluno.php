<?php
@session_start();
		
		if(!isset($_COOKIE['login'])){
        header('Location: indexAluno.html') ;
        return;
    }

    $email = base64_decode($_COOKIE['login']);

    include('conexaoCurso.php');

    $queryCursosAluno ="SELECT * FROM cursoalunos WHERE email = '{$email}'";
    $queryCursos ="SELECT * FROM tabcursos";

    $resultCursosAluno = mysqli_query($conexaoCursos, $queryCursosAluno);
    $resultCursos = mysqli_query($conexaoCursos, $queryCursos);


?>
<html lang="pt-br">

<head>
  <meta charset="utf-8" />
  <meta name="viweport" content="width=device-width, initial-scale=1.0" />
  <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="style.css">
  <script type="text/javascript" src="jquery-3.6.0.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <title>Página Principal</title>
</head>

<body class="banner"id="fundoMain">   
   <video autoplay muted loop>
      <source src="movie/A Girl Is Editing Her Marketing Assignment on a Laptop.mp4" type="video/mp4">
    </video>
  <nav class="navbar navbar-light" style="background-color: marigold;">
    <div class="container-fluid">
      <span class="navbar-brand mb-0 h1"><font color="white">Área do aluno</font></span>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Procurar" aria-label="Search">
        <button class="btn btn btn-primary" type="submit">Search</button>
        <a href= "logout.php" class="btn btn-danger" type="submit">Sair</a>
      </form>
    </div>
  </nav>
  <!-- Side navigation -->
  <div class="sidenav" style="background-color:marigold;">
    <div class="list-group list-group-flush">
      <a href="mainAluno.php"><font color="white"><span class="material-icons">home</font></span><font color="white"> Página inicial</font></a>
      <hr id="hrMain"/>
    </div>
  </div>
  <!-- Page content -->
  <div class="main">
  <div class="card" class= "scroll" id="cardcursosdisponiveis">
  <div class="table-overflow">
     <h2><font color="Black">Cursos Disponíveis:</font></h2>
      <div class="card-body">
        <table>
          <tr>
            <th>Curso</th>
            <th>Instituição</th>
            <th></th>
          </tr>
          <?php
          while ($row = mysqli_fetch_array($resultCursos, MYSQLI_ASSOC)) {
            echo "
            <tr>
                <td>{$row['Nome']}</td>
                <td>{$row['Instituicao']}</td>
                <td><a href= \"salvarCurso.php?email={$email}&curso={$row['Nome']}\" class=\"btn btn-success\" type=\"submit\">Cadastrar</a>
                </td>
            </tr>";
          }
          ?>
        </table>
      </div>
    </div>
  </div>
    <div class="card" id="cardcursoscadastrados">
      <div class="card-body">
      <h2><font color="Green"> Cursos matriculado:</font></h2>
        <table>
          <tr>
            <th><font color="Green">Cursos:</font></th>
          </tr>
          <?php
          while ($row = mysqli_fetch_array($resultCursosAluno, MYSQLI_ASSOC)) {
            echo "
            <tr>
                <td>{$row['curso']}</td>
            </tr>";
          }
          ?>
        </table>
      </div>
    </div>
  </div>
</body>
  