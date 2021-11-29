<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Minha Conta | PaperPlus - Papelaria e Escritório</title>

    <!-- FAVICONS -->
    <link rel="apple-touch-icon" sizes="180x180" href="imgs/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="imgs/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="imgs/favicon/favicon-16x16.png">
    <link rel="manifest" href="imgs/favicon/site.webmanifest">

    <!-- BOOSTRAP 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">

    <!-- GOOGLE FONTS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">  

    <!-- STYLESHEETS -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

  <!-- BARRA DE NAVEGAÇÃO -->

  <header>
    <nav class="navbar navbar-expand-lg navbar-light sticky-top">
      <div class="container-fluid px-sm-5">
        <a class="navbar-brand" href="index.php">
          <img src="/PaperPlus/imgs/logo-100.png" alt="Logo PaperPlus" width="160px" height="auto">
        </a>
        <div class="carrinho order-lg-last mx-3">
          <a class="carrinho" href="carrinho.html" data-bs-toggle="tooltip" title="Carrinho">
            <i class="bi bi-cart3"></i>
          </a>
        </div>
        <button class="navbar-toggler ms-auto border-0" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
          <i class="bi bi-list"></i>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="mynavbar">

          <form class="d-flex input-group mx-lg-5" action="pesquisa.php" method="GET">
            <button class="btn btn-primary" type="submit">
              <i class="bi bi-search text-muted"></i>
            </button>
            <input type="text" name="search" class="form-control border-0" placeholder="O que você procura?">
          </form>

          <ul class="d-flex navbar-nav align-items-center">
            <li class="nav-item mx-2">
              <a class="nav-link active" href="categorias.html">Categorias</a>
            </li>
            <li class="nav-item mx-2 text-nowrap">
              <a class="nav-link active" href="login.php">Minha conta</a>
            </li>
            <li class="nav-item mx-2">
              <a class="nav-link active" href="contato.html">Contato</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <!-- LOGIN E CADASTRO -->

  <main class="login d-flex align-items-center justify-content-center">
    <div class="container-forms">
      <input type="checkbox" id="flip">
      <div class="forms">
        <div class="forms-content p-5 d-flex align-items-center justify-content-between">
          <div class="login-form">
            <h1 class="login-label mb-5">Entrar</h1>

            <?php
            if(isset($SESSION['status_cadastro'])):
            ?>
            <p class="sucesso" style="color:green">Cadastro realizado com sucesso! Faça seu login.</p>
            <?php
            endif;
            unset($_SESSION['status_cadastro']);
            ?>

            <form action="logar.php" class="d-grid" method="POST">
              <div class="input-group d-flex align-items-center">
                <span class="input-group-text" id="basic-addon1">
                  <i class="bi bi-envelope-fill me-2" id="basic-addon1"></i>
                </span>
                <input type="text" class="form-control" placeholder="E-mail" name="email" aria-describedby="basic-addon1" required>
              </div>
              <div class="input-group mb-3 d-flex align-items-center">
                <span class="input-group-text" id="basic-addon2">
                  <i class="bi bi-lock-fill me-2"></i>
                </span>
                <input type="password" class="form-control" placeholder="Senha" name="senha" aria-describedby="basic-addon2" required>
              </div>
              <p class="mb-4"><a href="#">Esqueceu sua senha?</a></p>
              
              <?php
                if(isset($_SESSION['nao_autenticado'])):
              ?>
              <p class="invalido text-center" style="color:brown">Usuário ou senha inválidos.</p>
              <?php
                endif;
                unset($_SESSION['nao_autenticado']);
              ?>

              <button class="btn btn-primary btn-block mb-4 p-3" type="submit">Entrar</button>
              <p class="signup-text text-center">Não tem uma conta? <label for="flip">Cadastre-se.</label></p>
            </form>
          </div>
          <div class="signup-form">
            <h1 class="signup-label mb-5">Criar conta</h1>
            <form action="cadastrar.php" class="d-grid" method="POST">
              <div class="input-group d-flex align-items-center">
                <span class="input-group-text" id="basic-addon3">
                  <i class="bi bi-person-fill me-2"></i>
                </span>
                <input type="text" class="form-control" name="nome-cadastro" placeholder="Nome" aria-label="nome" aria-describedby="basic-addon3" required>
              </div>
              <div class="input-group d-flex align-items-center">
                <span class="input-group-text" id="basic-addon4">
                  <i class="bi bi-envelope-fill me-2"></i>
                </span>
                <input type="text" class="form-control" name="email-cadastro" placeholder="E-mail" aria-label="Username" aria-describedby="basic-addon4" required>
              </div>
              <div class="input-group d-flex align-items-center">
                <span class="input-group-text" id="basic-addon5">
                  <i class="bi bi-lock-fill me-2"></i>
                </span>
                <input type="password" class="form-control" name="senha-cadastro" placeholder="Senha" aria-label="Password" aria-describedby="basic-addon5" required>
              </div>
              <button class="btn btn-primary btn-block my-5 p-3" type="submit">Criar conta</button>
              <p class="signup-text text-center">Já tem uma conta? <label for="flip">Faça login.</label></p>
            </form>
          </div>
        </div>
      </div>
    </div>
  </main>

  <!-- FOOTER -->

  <footer>
    <div class="container-fluid footer-branco text-black px-5 text-center">
      <div class="d-flex flex-column justify-content-between align-items-center">
        <ul class="redes-sociais list-group list-group-horizontal mt-3">
          <li class="list-group-item">
            <a href="https://api.whatsapp.com/">
              <i class="bi bi-whatsapp"></i>
            </a>
          </li>
          <li class="list-group-item mx-4">
            <a href="https://www.facebook.com/">
              <i class="bi bi-facebook"></i>
            </a>
          </li>
          <li class="list-group-item">
            <a href="https://www.instagram.com/">
              <i class="bi bi-instagram"></i>
            </a>
          </li>
        </ul>
        <ul class="links-uteis list-group list-group-horizontal mt-1 mb-3">
          <li class="list-group-item px-2">
            <a href="">Termos de Serviço</a>
          </li>
          <li class="list-group-item px-2">
            <a href="">Política de Privacidade</a>
          </li>
          <li class="list-group-item px-2">
            <a href="">Mapa do Site</a>
          </li>
        </ul>
        <address>
          <span class="fst-italic">PaperPlus SA - CNPJ: 00.000.000/0000-00 - Endereço: Avenida Paulista, 000 - São Paulo, SP - CEP: 00000-000
        </address>
      </div>
    </div>
  </footer>

  <!-- SCRIPTS -->

  <script src="js/jquery.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
  
</body>
</html>