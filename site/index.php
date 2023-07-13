<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Barbearia #</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="icon" href="img/icone.png" type="image/x-icon">
</head>

<body>

  <nav class="navbar navbar-expand-lg fixed-top bg-dark">
    <div class="container-fluid">
    <a class="barbeariaHeader" href="#inicio"><h3><strong>Barbearia #</strong></h3></a>
      <button class="navbar-toggler navbar-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse k navbar-collapse" id="navbarNavDarkDropdown">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item">
            <a class="nav-link active bg-gradient-danger me-5" aria-current="page" href="#inicio">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link bg-gradient-danger me-5" href="https://api.whatsapp.com/send?phone=<19991229908>&text=Olá, gostaria de agendar um horário!" target="_blank">Agende agora!</a>
          </li>
          <li class="nav-item">
            <a class="nav-link bg-gradient-danger me-5" href="#quem-somos">Quem Somos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link bg-gradient-danger me-5" href="#servicos">Serviços</a>
          </li>

          <li class="nav-item dropdown me-5">
            <a class="nav-link bg-gradient-danger dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Mais
            </a>
            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
              <li><a class="dropdown-item" href="#galeria">Galeria</a></li>
              <li><a class="dropdown-item" href="#contato">Contato</a></li>
              <li><a class="dropdown-item" href="#localizacao">Localização</a></li>
            </ul>
          </li>

          <li class="nav-item">
            <a class="btn btn-outline-primary bg-gradient-danger me-5" href="#">Login</a>
          </li>

          <div class="iconesMenu me-5">
          <li>
  <a href="https://api.whatsapp.com/send?phone=<19991229908>&text=Olá!" target="_blank">
    <img src="img/whatsapp.png" class="iconeWhatsappMenu" alt="Ícone do WhatsApp">
  </a>
</li>

<li>
  <a href="https://www.instagram.com/jvpolizelli/" target="_blank">
    <img src="img/instagram.png" class="iconeInstagramMenu" alt="Ícone do Instagram">
  </a>
</li>

<li class="me-5">
  <a href="https://www.facebook.com/joaovitor.polizelli" target="_blank">
    <img src="img/facebook.png" class="iconeFacebookMenu" alt="Ícone do Facebook">
  </a>
</li>

          </div>

        </ul>
      </div>
    </div>
  </nav>



  <div>
    <img id="inicio" src="img/barber.jpg" class="img-fluid imagemInicio" alt="">
  </div>


  <div class="espacamentoQuemSomos">
    <img src="img/quemSomos.jpg" class="img-fluid imgQuemSomos mt-5" alt="...">

    <section id="quem-somos" class="quemSomos mt-5">QUEM SOMOS</section>
    <br><br>
    <div>
      <p class="textoQuemSomos">Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia inventore temporibus <br> nostrum quas aperiam doloremque labore consequatur, velit porro dolorum earum as <br><br> ad ipsum possimus repellendus rerum nobis magni suscipit. Lorem ipsum dolor sit lers<br> amet, consectetur adipisicing elit. Error non neque impedit dolor ducimus perspiciatisy <br><br> 
      <img src="img/logo.jpg" class="logo" alt="">
      </p>
    </div>


    <p class="nomeBarbeiro">
      <strong>Leonardo Souza (Proprietário da Barbearia #)</strong>
    </p>

    <p class="textoBarbearia">
      Lorem ipsum dolor sit amet consectetur adipisicing elit. A atque mai<br>ores distinctio sequi, officia nostrum veritatis. Vitae labore deserunte,<br>laboriosam dolorem alias blanditiis aut numquam in rem explicabon <br> cumque dolore?<br><br>
      A Barbearia fica na Rua X, Bairro Y, Cidade Z;
    </p>
    <span class="textoBarbearia2"><strong>Barbearia em Americana-SP | Barbearia Av. Brasil | Melhor barbearia de São Paulo</strong></span>

    

  </div>


  <img src="img/imgServicos.jpg"  id="servicos" class="img-fluid imgServicos" alt="">
  <section class="servicos">SERVIÇOS</section>
  <span class="corteMasculino">Corte Masculino</span>
  <span class="precoCorteMasculino">R$30</span>
  <span class="barbaBigode">Barba & Bigode</span>
  <span class="precoBarbaBigode">R$40</span>
  <span class="comboCorteBB">Combo: Corte Masculino + Barba & Bigode</span>
  <span class="precoComboCorteBB">R$65</span>
  <span class="sobrancelha">Sobrancelha</span>
  <span class="precoSobrancelha">R$10</span>
  <span class="outrosServicos">Outros Serviços</span>
  <a class="cliqueAqui" href="https://api.whatsapp.com/send?phone=<19991229908>&text=Olá, pode me informar todos os serviços que vocês oferecem?" target="_blank">Clique aqui</a>
  

  <section id="galeria" class="galeria">GALERIA</section>


  <div class="row imagensGaleriaUm">
    <div class="col-3">
      <div class="image-container">
        <img src="img/galeria1.jpg" style="cursor: pointer;" class="img-fluid" alt="" onclick="window.location.href = 'https://www.instagram.com/jvpolizelli';">
        <div class="image-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, rerum delectus voluptates dolores eveniet velit laboriosam reprehenderit tenetur ducimus? Dicta ullam voluptatibus ex commodi, quos exercitationem fuga temporibus corrupti in!</div>
      </div>
    </div>


    <div class="col-3">
      <div class="image-container">
        <img src="img/galeria2.jpg" style="cursor: pointer;" class="img-fluid" alt="" onclick="window.location.href = 'https://www.instagram.com/jvpolizelli';">
        <div class="image-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde numquam illum perferendis quae magni beatae explicabo, animi atque quis. Alias minima accusantium eligendi facilis voluptatum officia! Nulla quisquam eius hic?</div>
      </div>
    </div>

    <div class="col-3">
      <div class="image-container">
        <img src="img/galeria3.jpg" style="cursor: pointer;" class="img-fluid" alt="" onclick="window.location.href = 'https://www.instagram.com/jvpolizelli';">
        <div class="image-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores incidunt deleniti laborum laboriosam doloribus aperiam quia mollitia! Eos delectus aperiam laborum eius voluptas consequatur, itaque, animi fuga dolore velit magni.</div>
      </div>
    </div>
  </div>

  <div class="row imagensGaleriaDois">
    <div class="col-3">
      <div class="image-container">
        <img src="img/galeria4.jpg" style="cursor: pointer;" class="img-fluid" alt="" onclick="window.location.href = 'https://www.instagram.com/jvpolizelli';">
        <div class="image-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum maiores doloribus inventore reiciendis labore eveniet eaque odit esse modi. Quasi veritatis esse a aliquid voluptatibus dolorum minus in fuga corrupti!</div>
      </div>
    </div>

    <div class="col-3">
      <div class="image-container">
        <img src="img/galeria5.jpg" style="cursor: pointer;" class="img-fluid" alt="" onclick="window.location.href = 'https://www.instagram.com/jvpolizelli';">
        <div class="image-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum nemo nihil ipsam praesentium! Nobis iusto minus, eveniet aspernatur assumenda commodi ullam, ratione asperiores minima officiis repellat, molestiae debitis dignissimos tempore.</div>
      </div>
    </div>

    <div class="col-3">
      <div class="image-container">
        <img src="img/galeria6.jpg" style="cursor: pointer;" class="img-fluid" alt="" onclick="window.location.href = 'https://www.instagram.com/jvpolizelli';">
        <div class="image-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, sequi facere, ipsam nobis eius unde voluptas illo est, eaque quam asperiores perspiciatis! Culpa ipsum doloremque assumenda illum, vero autem nihil.</div>
      </div>
    </div>
  </div>


  <div id="contato" class="imagemContato">
    <section class="contato">CONTATO</section>
    <div class="containerContato">
      <form action="contato.php" method="post">
        <div class="row">
          <div class="col mb-2">
            <input type="text" class="form-control nomeContato btn-light" name="nome" placeholder="Nome">
          </div>
          <div class="col mb-2">
            <input type="email" class="form-control emailContato btn-light" name="email" placeholder="Email">
          </div>
        </div>
        <div class="row">
          <div class="col mb-2">
            <input type="text" class="form-control assuntoContato btn-light" name="assunto" placeholder="Assunto">
          </div>
        </div>
        <div class="row">
          <div class="col mb-2">
            <textarea class="form-control mensagemContato btn-light" col="20" rows="4" name="mensagem" placeholder="Mensagem"></textarea>
          </div>
        </div>
        <div class="row">
          <div class="col mb-2 text-center">
            <button class="btn btn-secondary" onclick="exibirAlerta()" type="submit">Enviar</button>
          </div>
        </div>
      </form>
    </div>
  </div>

  <section id="localizacao"  class="localizacao">LOCALIZAÇÃO</section>
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14717.018842092975!2d-47.32767173022461!3d-22.755926799999987!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c89991d0d65091%3A0xe0ad9a25e4f050d3!2sR.%20Anhanguera%2C%201891%20-%20Nova%20Americana%2C%20Americana%20-%20SP%2C%2013466-060!5e0!3m2!1sen!2sbr!4v1685564151625!5m2!1sen!2sbr" width="750" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="maps"></iframe>

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


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>