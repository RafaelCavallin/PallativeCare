<section id="login">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-sm-12 col-md-8 col-lg-9">

        <div class="card my-4">
          <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
              <li class="nav-item">
                <a class="nav-link active" href="#logar" id="logar-tab" data-toggle="tab"  role="tab" aria-controls="logar" aria-selected="true">Acessar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="#cadastrar" id="cadastrar-tab" data-toggle="tab"  role="tab" aria-controls="cadastrar" aria-selected="true">Cadastrar</a>
              </li>
            </ul>
          </div>
          <div class="card-body">
             <div class="tab-content" id="myTabContent">

              <div class="tab-pane fade show active" id="logar" role="tabpanel" aria-labelledby="logar-tab">
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
                    <small id="emailHelp" class="form-text text-muted text-right mt-2"><a href="#" data-toggle="modal" data-target="#recuperarSenhaModal">Recuperar senha</a></small>
                  </form>
              </div><!-- Tab logar -->


              <div class="tab-pane fade" id="cadastrar" role="tabpanel" aria-labelledby="cadastrar-tab">
                <form name="formCadastro" action="src/classes/controllers/usuarioController.php?acao=cadastrar" method="POST">
                    <div class="form-group">
                      <label>Nome</label>
                      <input type="text" name="nome" class="form-control" required>
                    </div>
                    <div class="form-group">
                      <label>Email</label>
                      <input type="email" name="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                      <label>Senha</label>
                      <input type="password" id="idSenha" name="senha" class="form-control" required>
                    </div>
                    <div class="form-group">
                      <label>Confirmar senha</label>
                      <input type="password" id="idConfSenha" name="confSenha" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block mt-3">Enviar</button>
                </form>
              </div> <!-- Tab cadastro -->

            </div><!-- Tab content -->
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

