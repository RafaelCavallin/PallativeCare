<section id="login">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-sm-12 col-md-12 col-lg-9">

        <div class="card my-4">
          <div class="card-header">
            Acessar
          </div>
          <div class="card-body">
            <form name="formLogin" action="src/classes/controllers/loginController.php?acao=logar" method="POST">

              <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" required>
              </div>
              <div class="form-group">
                <label>Senha</label>
                <input type="password" name="senha" class="form-control" required>
              </div>
              <button type="submit" class="btn btn-primary btn-block mt-3">Enviar</button>

              <div class="row justify-content-between">
                <div class="col-6">
                  <small class="form-text text-muted text-left mt-2"><a href="#" data-toggle="modal" data-target="#cadastroModal">Cadastre-se</a></small>
                </div>
                <div class="col-6">
                  <small class="form-text text-muted text-right mt-2"><a href="#" data-toggle="modal" data-target="#recuperarSenhaModal">Recuperar senha</a></small>
                </div>
              </div><!-- /row justify-content-between -->

            </form>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>


<!-- Modal de recuperação de senha -->
<div class="modal fade" id="recuperarSenhaModal" tabindex="-1" role="dialog" aria-labelledby="recuperarSenhaModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="recuperarSenhaModal">Recuperar senha</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="src/classes/controllers/loginController.php?acao=recuperarSenha" method="post" >
          <div class="form-group">
            <label class="lead">Email</label>
            <input type="email" name="email" class="form-control" required>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary btn-block">Enviar</button>
      </div>
    </div>
  </div>
</div>

<!-- Model de cadastro de novo usuário -->
<div class=" modal fade" id="cadastroModal" tabindex="-1" role="dialog" aria-labelledby="cadastroModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="recuperarSenhaModal">Cadastro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form name="formCadastro" action="src/classes/controllers/usuarioController.php?acao=cadastrar" method="POST">
          <div class="form-group">
            <label>Nome</label>
            <input type="text" name="nome" class="form-control" required>
          </div>
          <div class="form-group">
            <label>Profissão</label>
            <input type="text" name="profissao" class="form-control">
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required>
          </div>
          <div class="form-row">
            <div class="col-sm-12 col-md-6 form-group">
              <label>Senha</label>
              <input type="password" id="idSenha" name="senha" class="form-control" required>
            </div>
            <div class="col-sm-12 col-md-6 form-group">
              <label>Confirmar senha</label>
              <input type="password" id="idConfSenha" name="confSenha" class="form-control" required>
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary btn-block">Enviar</button>
        </form>
      </div>
    </div>
  </div>  
</div>