<?php
@session_start();
		
if(!isset($_COOKIE['login'])){
    header('Location: indexProfessor.html') ;
    return;
}
?>
<html lang="pt-br">
<head>
  <meta charset="utf-8" />
  <meta name="viweport" content="width=device-width, initial-scale=1.0" />
  <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="style.css">
  <script type="text/javascript" src="jquery-3.6.0.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/jquery.validate.min.js"></script>
  <title>Página Principal</title>
</head>

<body id="fundoProf">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="mainProfessor.php"> Área do professor</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="#"></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="mainProfessor_Turmas11.html">Turmas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="mainProfessor_agenda.html">Calendário</a>
        </li>
      </ul>
        <a href= "logout.php" class="btn btn-danger" type="submit" style=''>Sair</a>
    </div>
  </nav>
  <h4><font color="white">Olá, Professora Débora</font></h4>
  <div class="card" id="perfilProf" style="width: 18rem;">
    <img class="card-img-top" src="image/professora.jpg" alt="Imagem de capa do card">
    <div class="card-body">
      <h5 class="card-title">Débora da Silva</h5>
      <p class="card-text">Ela amava História e decidiu ser professora. As primeiras experiências em sala de aula, no entanto, a fizeram mudar de ideia. Mas foi ao dar uma segunda chance ao magistério que se encontrou. Hoje, Débora da Silva, educa e resgata a autoestima de alunos.</p>
    </div>
  </div>
  <ol class="list-group list-group-numbered" id="msgProf">
    <li class="list-group-item d-flex justify-content-between align-items-start">
      <div class="ms-2 me-auto">
        <div class="fw-bold">Turma A - Recursos Humanos</div>
        Estudem que a prova não vai ser fácil.
      </div>
      <span class="badge bg-primary rounded-pill">13</span>
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-start">
      <div class="ms-2 me-auto">
        <div class="fw-bold">Carlos</div>
        Era só essa dúvida mesmo!
      </div>
      <span class="badge bg-primary rounded-pill">3</span>
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-start">
      <div class="ms-2 me-auto">
        <div class="fw-bold">Igor</div>
        Boa tarde professora, que dia vai ser a prova ?
      </div>
      <span class="badge bg-primary rounded-pill">1</span>
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-start">
      <div class="ms-2 me-auto">
        <div class="fw-bold">Flávia</div>
        Achei muito difícil aquele questionário.
      </div>
      <span class="badge bg-primary rounded-pill">5</span>
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-start">
      <div class="ms-2 me-auto">
        <div class="fw-bold">Heitor</div>
        Muito obrigado pela revisão, me salvou!
      </div>
      <span class="badge bg-primary rounded-pill">1</span>
    </li>
  </ol>
  <div class="d-grid gap-2 col-2 mx-auto" id="btnMsg">
    <a href="https://web.whatsapp.com/"><button class="btn btn-primary" type="button">Acessar bate-papo</button></a>
  </div>
  <div class="accordion" id="accordionExample">
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingOne">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Agenda
        </button>
      </h2>
      <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
        <div class="accordion-body">
           <p>Seg - Contrato de trabalho;</p> 
           <p>Ter - Alterações de salário;</p>
           <p>Qua - A importância do setor de RH;</p>
           <p>Qui - Anotações de férias;</p>
           <p>Sex - Anotações gerais;</p>
        </div>
      </div>
    </div>
  </div>
  <div class="accordion" id="accordionExample2">
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingOne">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Anotações
        </button>
      </h2>
      <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
        <div class="accordion-body">
           <p>- Fatores Externos: Situação do MT / Conjuntura econômica CLT / Concorrência / Situação do mercadoSindicato e negociação coletiva</p> 
           <p>- Fatores Internos: Tipologia do cargoPolítica de Rh e política salarialDesempenho e capacidade financeira</p>
        </div>
      </div>
    </div>
  </div>
</body>

  