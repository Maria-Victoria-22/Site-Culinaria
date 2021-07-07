<?php

include_once 'connect.php';

Class Screen extends Connect
{   
    public $screen;
    public $message;
    function __construct(){
        parent::__construct();
        $this->screen = new stdClass();
        $this->screen ->site = "Culinaria";
        $this->screen->privacidade = "http://www.google.com.br";
        $this->screen->termos = "http://www.google.com.br";
        $this->screen->contato = "http://www.google.com.br";
        $this->screen->banner = $this->banner();
    }
    
    function banner ()
    {
       $links = array (
           '01' => ROOT . 'img/banner01.png',
           '02' => ROOT . 'img/banner.png',
           '03' => ROOT . 'img/fresca.png'   
       );
               
    return $links; 
               
    }
     function validate( $hash )
    {
        if ( !empty( $hash ) ) {
            $encrypt = explode( '&' , $hash );
            $dados = array(
                '_email'    =>  base64_decode( $encrypt[0] ),
                '_senha'    =>  base64_decode( $encrypt[1] )
            );
            $this->login( $dados , 'validate' );
        } else {
            $this->sair( 'validate' );
        }
    }
    function login( $dados, $action )
    {
        $query = "SELECT cod FROM clientes WHERE email = :email AND senha = :senha";
        try {
            $stm = $this->db->prepare( $query );
            $stm->bindParam( ':email', $dados['_email']  );
            $stm->bindParam( ':senha', base64_encode( $dados['_senha'] ) );
            $stm->execute();
            $result = $stm->fetchAll( PDO::FETCH_COLUMN, 0 );            
            if ( empty( $result ) ) {
                $this->message = 'Usuario ou senha invalidos!';                
            } else if ( $action == 'login' && is_array( $result )){
            $this->geracao( $dados );
            }
            
        } catch ( PDOException $e ) {
            $this->message = $e->getMessage();
        }
    }
    function geracao( $dados )
    {
        session_start();
        $hash = base64_encode( $dados[ '_email' ] ) . '&' . base64_encode( $dados[ '_senha' ] );
        $_SESSION[ 'hash' ] = $hash;
        if ( $dados[ '_manter' ] == TRUE )
        {
            setcookie( 'hash' , $hash , time() + 2000 );
        }
        header( 'location:' . ROOT . 'admin.php' );
    }
    function sair( $validate = false )
    {
        session_start();
        unset( $_SESSION[ 'hash' ] );
        setcookie( 'hash' , '' , time() -1 );
        unset( $_COOKIE[ 'hash' ] );
        session_destroy();
        if ( $validate )
            header( 'location:' . ROOT . 'login.php'  );
        else
            header( 'location:' . ROOT );
    }
}
define ("ROOT", $_SERVER ['REQUEST_SCHEME'] . '://'. $_SERVER ['SERVER_NAME'] . '/pi/');