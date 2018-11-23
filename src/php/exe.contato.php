<div class="container">
  <div class="row">
    <div class="col-md-12 mt-4">
      <h4 class="display-4">Contato</h4>
    </div>
  </div>
</div>

<section id="contato" class="mt-3 ">
  <div class="container">
    <div class="row justify-content-center">

      <div class="col-sm-12 col-md-12">
        <p class="text-justify lead">Campos com * são obrigatórios. Seus dados não serão divulgados.</p>
      </div>

      <hr>

      <div class="col-sm-12 col-md-8">
        <div class="card bg-light">
          <div class="card-header">
            <h4 class="card-title text-center"><em>Formulário de Contato</em></h4>
          </div>
          <div class="card-body">
            <form action="src/classes/controllers/emailController.php" method="POST">
              <div class="form-group"> 
                <label for="" class="lead">Nome*</label>
                <input type="text" name="nome" class="form-control" required>
              </div>
              <div class="form-group">
                <label for="" class="lead">Email*</label>
                <input type="email" name="email" class="form-control" required>
              </div>
              <div class="form-group">
                <label for="" class="lead">Mensagem*</label>
                <textarea name="mensagem" class="form-control" cols="30" rows="10" required></textarea>
              </div>
              <button type="submit" class="btn btn-primary mt-2 btn-block">Enviar</button>
          </form>
          </div><!-- /card-body -->
        </div><!-- /card -->
      </div>

    </div>
  </div>
</section>    