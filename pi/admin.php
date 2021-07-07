<?php 
    include_once 'classes/admin.php';
    $tag = new Admin();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Dashboard Template for Bootstrap</title>
    <link href="<?php echo ROOT; ?>css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo ROOT; ?>css/main/dashboard.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Maria Victoria</a>
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="<?php echo $tag->screen->admin; ?>?action=sair">Sair</a>
        </li>
      </ul>
    </nav>
    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="#">
                  <span data-feather="home"></span>
					Painel Administrativo <span class="sr-only">(current)</span>
                </a>
              </li>
            </ul>
          </div>
        </nav>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
            <div class="row">
                <div class="col-md-12 col-12">
                  <h4 class="mb-3" style="padding-top:50px">Cadastro de Produto</h4>
                  <p class="lead"><?php echo $tag->message; ?></p>
                  <form method="post" action="<?php echo $tag->screen->admin; ?>" enctype="multipart/form-data">
                        <div class="mb-3">
                          <label for="nome">Nome do Produto</label>
                          <input type="text" class="form-control" name="_nome" id="nome" placeholder="">
                        </div>

                        <div class="mb-3">
                          <label for="descritivo">Descrição do Produto</label>
                          <input type="textarea" class="form-control" name="_descritivo" id="descritivo" placeholder="" required>
                        </div>

                        <div class="mb-3">
                          <label for="preco">Preço</label>
                          <input type="text" class="form-control" name="_preco" id="preco" placeholder="">
                        </div>
                        <div class="mb-3">
                          <label for="foto">Foto do produto</label>
                          <input type="file" class="form-control" name="_foto" id="foto" placeholder="">
                        </div>
                        <hr class="mb-4">
                        <button class="btn btn-primary btn-lg btn-block" type="submit">Cadastrar</button>
                  </form>
                </div>
        </div>
          
          

          
        </main>
      </div>
    </div>
    <script src="<?php echo ROOT; ?>js/main/jquery-3.3.1.min.js"></script>
    <script src="<?php echo ROOT; ?>js/bootstrap/bootstrap.min.js"></script>
    <script src="<?php echo ROOT; ?>js/main/main.js"></script>

  </body>
</html>
