<?php 
    include_once "classes/cadastrar.php";
    $tag = new Cadastrar();
    include_once 'header.php';
?>
<section>
    <div class="container">
        <div class="py-5 text-center">
            <h2>Cadastra-se</h2>
            <p class="lead">Tenha acesso a todo o nosso conteúdo.</p>
        </div>
        <div class="row">
                <div class="col-md-12 col-12">
                  <h4 class="mb-3">Dados Pessoais</h4>
                  <p class="lead"><?php echo $tag->message; ?></p>
                  <form id="form-cadastro" method="post" action="<?php echo $tag->screen->cadastrar; ?>">
                        <div class="row">
                          <div class="col-md-6 mb-3">
                                <label for="nome">Nome</label>
                                <input type="text" class="form-control" name="_nome" id="nome" placeholder="Nome" value="" required>
                                <div class="invalid-feedback">
                                  Nome é obrigatório.
                                </div>
                          </div>
                          <div class="col-md-6 mb-3">
                                <label for="sobrenome">Sobrenome</label>
                                <input type="text" class="form-control" name="_sobrenome" id="sobrenome" placeholder="Sobrenome" value="" required>
                                <div class="invalid-feedback">
                                    Sobrenome é obrigatório.
                                </div>
                          </div>
                        </div>
                        <div class="row">
                        <div class="col-md-6 mb-3">
                          <label for="usuario">Usuario</label>
                          <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">@</span>
                                </div>
                                <input type="text" class="form-control" name="_usuario" id="usuario" placeholder="Usuário" required>
                                <div class="invalid-feedback" style="width: 100%;">
                                  Usuario é obrigatório.
                                </div>
                          </div>
                        </div>
                        <div class="col-md-6 mb-3">
                          <label for="senha">Senha</label>
                          <div class="input-group">
                                <input type="password" class="form-control" name="_senha" id="senha" placeholder="Senha" required>
                                <div class="invalid-feedback" style="width: 100%;">
                                  Senha é obrigatório.
                                </div>
                          </div>
                        </div>
                        </div>

                        <div class="mb-3">
                          <label for="email">Email</label>
                          <input type="email" class="form-control" name="_email" id="email" placeholder="seu@email.com">
                          <div class="invalid-feedback">
                                Insira um email válido.
                          </div>
                        </div>

                        <div class="mb-3">
                          <label for="endereco">Endereço</label>
                          <input type="text" class="form-control" name="_endereco" id="endereco" placeholder="1234 Main St" required>
                          <div class="invalid-feedback">
                                Insira seu endereço.
                          </div>
                        </div>

                        <div class="mb-3">
                          <label for="endereco2">Endereço Alternativo <span class="text-muted">(Optional)</span></label>
                          <input type="text" class="form-control" name="_endereco2" id="endereco2" placeholder="Endereço Alternativo">
                        </div>

                        <div class="row">
                          <div class="col-md-5 mb-3">
                                <label for="pais">País</label>
                                <select class="custom-select d-block w-100" name="_pais" id="pais" required>
                                  <option value="">Escolha...</option>
                                  <option value="Estado Unidos">Estados Unidos</option>
                                  <option value="Brazil">Brazil</option> 
                                </select>
                                <div class="invalid-feedback">
                                  Insira um País
                                </div>
                          </div>
                          <div class="col-md-4 mb-3">
                                <label for="uf">Estado</label>
                                <select class="custom-select d-block w-100" name="_uf" id="uf" required>
                                  <option value="">Escolha...</option>
                                  <option value="São Paulo">São Paulo</option>
                                  <option value="Rio de Janeiro">Rio de Janeiro</option>
                                </select>
                                <div class="invalid-feedback">
                                  Insira seu estado
                                </div>
                          </div>
                          <div class="col-md-3 mb-3">
                                <label for="cep">CEP</label>
                                <input type="text" class="form-control" name="_cep" id="cep" placeholder="" required>
                                <div class="invalid-feedback">
                                  Insira seu Cep.
                                </div>
                          </div>
                        </div>
                        <hr class="mb-4">
                        <button class="btn btn-primary btn-lg btn-block" type="submit">Cadastrar</button>
                  </form>
                </div>
        </div>
    </div>
</section>
<?php include_once 'footer.php'; ?>
