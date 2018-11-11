<div class="container">
  <div class="row">
    <div class="col-md-12 mt-4">
      <h4 class="display-4">Contato</h4>
    </div>
  </div>
</div>

<section id="contato" class="my-3">
  <div class="container">
    <div class="row justify-content-center">

      <div class="col-sm-12 col-md-6 my-1">
        <p>Se você ...</p>
        <ul>
          <li class="text-justify">Tem alguma ideia que possa contribuir com o desenvolvimento do projeto.</li>
          <li class="text-justify">Achou algum erro...</li>
          <li class="text-justify">etc...</li>
        </ul>
      </div>

      <div class="col-sm-12 col-md-6 my-1">
        <form action="src/classes/controllers/emailController.php" method="POST">
          <legend class="text-center">Formulário de Contato</legend>
          <div class="form-group">
            <label for="">Nome</label>
            <input type="text" name="nome" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="">Email</label>
            <input type="email" name="email" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="">Mensagem</label>
            <textarea name="mensagem" class="form-control" cols="30" rows="10" required></textarea>
          </div>
          <button type="submit" class="btn btn-success mt-2 btn-block">Enviar</button>
        </form>
      </div>

    </div>
  </div>
</section>    