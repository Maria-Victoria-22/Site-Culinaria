<?php 
    include_once 'classes/home.php';
    $tag = new Home();
    include_once 'header.php';
?>
<section class="produtos">
    <div class="container">
        <div class="row" >
            <?php foreach( $tag->screen->produtos as $produto ) { ?>
            <div class="col-12 col-md-4" style="padding-top:50px" >
                    <div class="card" >
                            <img class="card-img-top" src="<?php echo $produto->img; ?>" alt="Card image cap">
                            <div class="card-body">
                                    <h5 class="card-title"><?php echo $produto->nome; ?></h5>
                                    <p class="card-text"><?php echo substr($produto->descritivo,0,55); ?>...</p>
                                    <a href="#" class="btn btn-primary"><?php echo $produto->preco; ?></a>
									<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal<?php echo $produto->cod; ?>">Descrição</button>
                            </div>
                    </div>
            </div>
            
			<div class="modal fade" id="myModal<?php echo $produto->cod; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-body">
						
							<div class="row">              
								<div class="col-6 col-sm-4">
								<img src="<?php echo $produto->img; ?>" alt="Card image cap" width="240px">
								</div>
								<div class="col-8 col-sm-8">
									<h4><?php echo $produto->nome; ?></h4> <br/>					
									<p><?php echo $produto->descritivo; ?></p>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>
			
			<?php } ?>
            
        </div>
    </div>
</section>
<section class="newsletter" style="padding-top:50px">
    <div class="container">  
        <form id="form-newsletter" method="post" >
            <div class="row">
                <div class="col-md-4 mb-3">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" name="_nome" id="nome" placeholder="Nome" value="" required>
                    <div class="invalid-feedback">
                      Nome é obrigatório.
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="telefone">Telefone</label>
                    <input type="text" class="form-control" name="_telefone" id="telefone" placeholder="(99) 9999-9999" value="" required>
                    <div class="invalid-feedback">
                      Telefone é obrigatório.
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                      <label for="email">E-mail</label>
                      <input type="email" class="form-control" name="_email" id="email" placeholder="seu@email.com" value="" required>
                      <div class="invalid-feedback">
                          Email é obrigatório.
                      </div>
                </div>
                <div class="col-md-1 mb-3">
                    <button class="btn btn-primary btn-newsletter" type="submit">Cadastrar</button>
                </div>
            </div>
        </form>
    </div>
</section>
<?php include_once 'footer.php'; ?>
