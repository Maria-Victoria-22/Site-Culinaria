<?php

include_once 'screen.php';

Class Admin extends Screen
{
    function __construct() {
        parent::__construct();
        session_start();
        if (isset( $_GET[ 'action']) && $_GET[ 'action'] == 'sair')
            $this->sair();
        else {
            if ( !isset( $_COOKIE[ 'hash' ] ) && !isset( $_SESSION[ 'hash' ] ) ) {
                header( 'location:' . ROOT . 'login.php' );   
            } else if ( isset( $_SESSION[ 'hash' ] ) ) {
                $this->validate( $_SESSION[ 'hash' ] ); 
            } else {
                $this->validate( $_COOKIE[ 'hash' ] );
            }
        }
         $this->screen->admin = ROOT . 'admin.php';
    
        if (!empty($_POST)) {
            $this->cadastrar ($_POST);
        }
    }
    
    function cadastrar( $dados )
    {
        $arquivo = strtolower( str_replace( '', '_', $_FILES['_foto']['name'] ) );
        $caminho = 'C:\xampp\htdocs\pi\img\\' . $arquivo;
        $link = ROOT . 'img/' . $arquivo ;
        move_uploaded_file($_FILES ['_foto']['tmp_name'], $caminho );
        
        $query = "INSERT INTO produtos "
                . "( nome, descritivo, img, preco ) "
                . "VALUES ( :nome, :descritivo, :img, :preco )";
        try {
            $stm = $this->db->prepare( $query );
            $stm->bindParam( ':nome', $dados[ '_nome' ] );
            $stm->bindParam( ':descritivo', $dados[ '_descritivo' ] );
            $stm->bindParam( ':img', $link );
            $stm->bindParam( ':preco', str_replace(',','.', $dados[ '_preco' ] ));
            $stm->execute();
         } catch ( PDOException $e ) {
            $this->message = $e->getMessage();
        }    
    }
}
