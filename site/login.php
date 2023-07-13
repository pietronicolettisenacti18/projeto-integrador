<?php
function redirect($url) {
    header("Location: $url");
    exit();
  }
  
  // Verificar se um parâmetro de redirecionamento foi passado na URL
  if (isset($_GET['redirect'])) {
    $redirect = $_GET['redirect'];
  
    // Redirecionar para a página index.php
    if ($redirect === 'home' || $redirect === 'agendar' || $redirect === 'quem-somos' || $redirect === 'servicos' || $redirect === 'galeria' || $redirect === 'contato' || $redirect === 'localizacao') {
      redirect('index.php#' . $redirect);
    }
  }

include 'cabecalho.php';
include 'menu.php';
include 'conexao.php';
?>

include 'conexao.php';

<section class="login">LOGIN</section>

    <div class="containerLogin">
      <form action="index.php" method="post">
        <div class="row">
          <div class="col-6 mx-auto mb-2">
            <input type="text" class="form-control nomeContato btn-light" name="usuario" placeholder="Usuário">
          </div>
        </div>
        <div class="row">
          <div class="col-6 mx-auto mb-2">
            <input type="text" class="form-control assuntoContato btn-light" name="senha" placeholder="Senha">
          </div>
        </div>
        
        <div class="row">
          <div class="col-6 mx-auto mt-2 text-center">
            <button class="btn btn-success" type="submit">Iniciar Sessão</button>
          </div>
        </div>


        <div class="row">
           <div class="col text-center mt-5">
            <p class="semLogin">Não tem conta?  <a class="cadastre-se" href="cadastro.php">Cadastre-se!</a></p>
           </div>
        </div>

      </form>
    </div>
  

<div>
    <img id="inicio" src="img/teste.jpg" class="img-fluid imagemLogin" alt="">
  </div>

  <footer class="footer">

    <h4 class="textoFooter">Barbearia #</h4>
    <div class="icones">

    <a href="https://api.whatsapp.com/send?phone=<19991229908>&text=Olá!" style="text-decoration: none;" target="_blank">
    <img src="img/whatsapp.png" class="iconeWhatsapp" alt="Ícone do WhatsApp">
    </a>

      <a href="https://www.instagram.com/jvpolizelli/" style="text-decoration: none;" target="_blank">
    <img src="img/instagram.png" class="iconeInstagram" alt="Ícone do Instagram">
  </a>

  <a href="https://www.facebook.com/joaovitor.polizelli" target="_blank">
    <img src="img/facebook.png" class="iconeFacebook" alt="Ícone do Facebook">
  </a>

    </div>

    <h6 class="textoFooter2">Barbearia # - CNPJ: 00.001.001/0001-01<br>

      Rua X, Número 1891 - CEP 13466-060 - Americana - SP - Nova Americana<br>

      Copyright © 2023, TODOS OS DIREITOS RESERVADOS.</h6>
  </footer>