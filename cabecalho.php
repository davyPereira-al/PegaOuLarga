<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cabecalho</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link href="https://jsdelivr.net" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Pega<span style="color: #0757cff1;">Ou</span>Larga</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="roupas.php">Roupas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Casa e acessórios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Jogos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Esportes</a>
        </li>
         <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Materiais e Construção</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="sobrenos.php">Sobre nós</a>
        </li>
      </ul>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <img src="Imagens/icons.png" alt="Ícone de Cadastro">
        </a>

        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="login.php">Login</a></li>
          <li><a class="dropdown-item" href="cadastro.php">Cadastrar-se</a></li>
        </ul>
      </li>      
     
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
</header>