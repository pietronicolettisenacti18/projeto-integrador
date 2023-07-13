<?php
include 'cabecalho.php';
include 'menu.php';
?>

<section class="cadastro">CADASTRO</section>
    <div class="containerCadastro">
      <form action="cadastro.php" method="post">
        <div class="row">
          <div class="col mb-2">
            <input type="text" class="form-control nomeContato btn-light" name="nome" placeholder="Nome">
          </div>
          <div class="col mb-2">
            <input type="email" class="form-control emailContato btn-light" name="celular" placeholder="Celular">
          </div>
        </div>
        <div class="row">
          <div class="col mb-2">
            <input type="text" class="form-control nomeContato btn-light" name="nomeUsuario" placeholder="Nome de Usuário">
          </div>
          <div class="col mb-2">
            <input type="email" class="form-control emailContato btn-light" name="email" placeholder="E-mail">
          </div>
        </div>
        <div class="row">
          <div class="col mb-2">
            <input type="text" class="form-control nomeContato btn-light" name="senha" placeholder="Senha">
          </div>
          <div class="col mb-2">
            <input type="email" class="form-control emailContato btn-light" name="confirmSenha" placeholder="Confirmar Senha">
          </div>
        </div>
        
        <div class="row">
          <div class="col-6 mx-auto mt-2 text-center">
            <button class="btn btn-danger" type="submit">Concluir</button>
          </div>
        </div>
      </form>
    </div>
  </div>

<div>
    <img id="inicio" src="img/imgServicos.jpg" class="img-fluid imagemCadastro" alt="">
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
