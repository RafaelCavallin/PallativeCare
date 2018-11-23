<nav class="navbar navbar-expand-lg navbar-light sticky-top py-3">
    <div class="container">
        <a href="index.php" class="navbar-brand"><h3>Palliative Care</h3></a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navBarNav"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navBarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="index.php" class="nav-link">Inicial</a>
                </li>
                <li class="nav-item">
                    <a href="index.php?pg=masNoticias" class="nav-link">Más Notícias</a>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Escalas</a>
                    <div class="dropdown-menu" area-labelledby="navbarDropdown">
                        <a href="index.php?pg=escalaPps" class="dropdown-item">PPS</a>
                        <a href="index.php?pg=escalaEsas" class="dropdown-item">ESAS-r</a>
                        <a href="index.php?pg=escalaZarit" class="dropdown-item">Zarit</a>
                        <a href="index.php?pg=escalaKps" class="dropdown-item">Karnofsky</a>
                        <a href="index.php?pg=escalaHad" class="dropdown-item">Escala HAD</a>
                        <a href="index.php?pg=escalaPap" class="dropdown-item">PaP</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="index.php?pg=sobre" class="nav-link">Sobre</a>
                </li>
                <li class="nav-item">
                    <a href="index.php?pg=contato" class="nav-link">Contato</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link" data-toggle="modal" data-target="#loginModal">Acessar</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Modal Login -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Acessar</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
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
        </div><!-- /modal-body -->
    </div><!-- modal content -->
  </div><!-- modal dialog -->
</div><!-- modal -->




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