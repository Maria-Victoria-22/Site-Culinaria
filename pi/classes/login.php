<?php
include_once "screen.php";

Class Login extends Screen
{
    function __construct() {
        parent::__construct();
        session_start();
        if ( isset( $_COOKIE[ 'hash' ] ) || isset( $_SESSION[ 'hash' ] ) ) {
            header( 'location:' . ROOT . 'admin.php' );
        } 
        $this->screen->login = ROOT . 'login.php';
        $this->screen->cadastrar = ROOT . 'cadastrar.php';
        if ( !empty( $_POST ) )
            $this->login($_POST , 'login');
    }
}
