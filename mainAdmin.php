<html lang="pt-br">

<head>
  <meta charset="utf-8" />
  <meta name="viweport" content="width=device-width, initial-scale=1.0" />
  <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="style.css">
  <script type="text/javascript" src="jquery-3.6.0.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/jquery.validate.min.js"></script>
  <title>Página Principal</title>
</head>

<body id="fundoMainAdm">
<div class="banner">
    <div class="card" id="perfilAdmin" style="width: 25rem;">
      <img src="image/admin.png" class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-text"><h5><b>PORTAL DO ADMINISTRADOR</h5></b></p>
      </div>
    </div>
  </div>
  <nav class="navbar navbar-light" style="background-color: Black;">
    <div class="container-fluid">
      <span class="navbar-brand mb-0 h1"><font color="white">Área do administrador</font></span>
      <font face= "times" size="6" color="white"><span class="material-icons">visibility_off<font color="white"></font></span><i>Guilherme</font></i>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn btn-primary" type="submit">Search</button>
        <a href= "indexAdm.html" class="btn btn-danger" type="submit">Sair</a>
      </form>
    </div>
  </nav>
  <!-- Side navigation -->
  <div class="sidenav" style="background-color:Black;">
    <div class="list-group list-group-flush">
      <a href="mainAdmin.php"><span class="material-icons"><font color="white">home</font></span><font color="white"> Página Inicial</font></a>
      <hr id="hrMain">
    </div>
    <div class="list-group list-group-flush">
      <a href="cadastroInst.html"><span class="material-icons"><font color="white">maps_home_work</font></span><font color="white"> Cadastrar Instituição</font></a>
      <hr id="hrMain">
    </div>
    <div class="list-group list-group-flush">
      <a href="cadastroCurso.html"><span class="material-icons"><font color="white">class</span></font><font color="white">Cadastrar Curso</font></a>
      <hr id="hrMain">
    </div>
    <div class="list-group list-group-flush">
      <a href="cadastroUnid.html"><span class="material-icons"><font color="white">house</font></span><font color="white"> Cadastrar Unidade</font></a>
      <hr id="hrMain">
    </div>
    <div class="list-group list-group-flush">
      <a href="cadastroTurma.html"><span class="material-icons"><font color="white">school</font></span><font color="white"> Cadastrar Turma</font></a>
      <hr id="hrMain">
    </div>
</div>
  <div class="accordion" id="accordionExample3">
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingOne">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          <b>Tarefas</b>
        </button>
      </h2>
      <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample3">
        <div class="accordion-body">
           <p><b>1- Configurar a página da frente</b></p>
           <p><b>2- Incluindo instituição e unidade</b></p>
           <p><b>3- Incluir Curso</b></p>
           <p><b>4- Incluir Turma</b></p>
           <p></p>
           <b>5- Gerenciar usuários</b>
           <br><b>5.1- Passo 1: Autenticação</b></br>
           <b>5.2- Passo 2: Inscrição</b>
           <p></p>
           <b>6- Gerenciamento de arquivos</b>
        </div>
      </div>
    </div>
  </div>
  <div class="accordion" id="accordionExample4">
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingOne">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          <b>Agenda</b>
        </button>
      </h2>
      <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample4">
        <div class="accordion-body">
           <p><b>Seg - Cadastrar instituição;</b></p>
           <p><b>Ter - Cadastrar unidade;</b></p>
           <p><b>Qua - Cadastrar curso;</b></p>
           <p><b>Qui - Cadastrar turma;</b></p>
           <p><b>Sex - Cadastrar professor e alunos</b></p>
           <p><b>Sab - Gerenciamento de arquivos;</b></p>
        </div>
      </div>
    </div>
  </div>
  <div class="alert alert-primary" id="atualizaçoes" role="alert">
    <b>Notas: Ultimas atualizações!</b>
  </div>
    <div class="card" id="lastAtualizaçoes">
      <div class="card-body">
        <b>Instituição: Uniceub;</b>
        <b><br>Unidade: Taguatinga Campus II;</b>
        <b><br>Responsável: André Luis;</b>
        <b><br>Telefone: (61) 99989-9180;</b>
        <p></p>
        <b>Cadastrado dia: 22/04/21</b>
      </div>
    </div>
    <div class="card" id="lastAtualizaçoes2">
      <div class="card-body">
        <b>Curso: Recursos Humanos;</b>
        <b><br>Coordenador: Thiago Silva;</b>
        <b><br>Frequência Mínima: 75%;</b>
        <b><br>Nota Mínima: 60%;</b>
        <p></p>
        <b>Cadastrado dia: 29/04/21</b>
      </div>
    </div>
    <div class="card" id="lastAtualizaçoes3">
      <div class="card-body">
        <b>Turma: A;</b>
        <b><br>Curso: Recursos Humanos;</b>
        <b><br>Professora: Débora Silva;</b>
        <b><br>Período: Matutino;</b>
        <p></p>
        <b>Cadastrado dia: 13/05/21</b>
      </div>
    </div>
    <hr id="liga">