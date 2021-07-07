<!DOCTYPE html>
<html lang="pt-br">
    <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="description" content="">
            <meta name="author" content="">
            <link rel="icon" href="">
            <title><?php echo $tag->screen->site; ?></title>
            <link href="<?php echo ROOT;?>css/bootstrap/bootstrap.min.css" rel="stylesheet">
            <link href="<?php echo ROOT;?>css/menu.css" rel="stylesheet">
            <link href="<?php echo ROOT;?>css/main/main.css" rel="stylesheet">
    </head>
    <body>
            <header>
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                            <a class="navbar-brand" href="<?php echo ROOT;?>"><?php echo $tag->screen->site; ?></a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav mr-auto" id="cssmenu">
                                            <li class="active has-sub">
                                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Receitas
                                                </a>
                                                <ul>
                                                    <li><a class="has-sub" href="#">Francesa</a></li>
                                                    <li><a class="has-sub" href="#">Mexicana</a></li>
                                                    <li><a class="dropdown-item" href="#">Itáliana</a></li>
                                                </ul>
                                            </li>
                                            <li class="nav-item">
                                                    <a class="nav-link disabled" href="<?php echo $tag->screen->login; ?>">Login</a>
                                            </li>
                                            <li class="nav-item">
                                                    <a class="nav-link disabled" href="<?php echo $tag->screen->cadastrar; ?>">Cadastre-se</a>
                                            </li>
                                    </ul>
                                    <form class="form-inline my-2 my-lg-0">
                                            <input class="form-control mr-sm-2" type="Pesquise" placeholder="Pesquise" aria-label="Pesquisar">
                                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisa</button>
                                    </form>
                            </div>
                    </nav>
					<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <?php
                                    $cont = 0;
                                    foreach ($tag->screen->banner as $banner)
                                    {
                                        $cont++;
                                ?>
                                   <div class="carousel-item <?php echo ( $cont ==1 ) ? 'active': ''; ?>"> 
                                       <img class="d-block w-100" src="<?php echo $banner; ?> "alt="">
                                    </div>
                                <?php
                                    }
                                ?>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                    </div>
            </header>