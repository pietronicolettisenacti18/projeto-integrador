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
            <button class="btn btn-secondary" type="submit">Enviar</button>
          </div>
        </div>
      </form>
    </div>
  </div>