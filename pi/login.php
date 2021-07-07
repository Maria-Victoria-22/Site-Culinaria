<?php
include_once "classes/login.php";
$tag = new Login();
include_once 'header.php';
?>
<section>
    <div class="container text-center">
        <form class="form-signin" action="<?php echo $tag->screen->login; ?>" method="POST">
            <h1 class="h3 mb-3 font-weight-normal">Faça seu Login</h1>
            <p class="lead"><?php echo $tag->message; ?></p>
            <label for="inputEmail" class="sr-only">Seu Email</label>
            <input type="email" id="inputEmail" class="form-control" name="_email" placeholder="Seu Email" required autofocus>
            <label for="inputPassword" class="sr-only">Sua senha</label>
            <input type="password" id="inputPassword" class="form-control" name="_senha" placeholder="Sua senha" required>
            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="TRUE" name="_manter"> Manter Conectado?
                </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
        </form>
    </div>
</section>
<?php include_once 'footer.php'; ?>
