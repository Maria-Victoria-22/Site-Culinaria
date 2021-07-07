<?php

include_once "screen.php";

Class Cadastrar extends Screen
{
    function __construct() {
        parent::__construct();
        $this->screen->login = ROOT . 'login.php';
        $this->screen->cadastrar = ROOT . 'cadastrar.php';
        
        
        if ( !empty( $_POST ) )
            $this->verifica( $_POST );
    }
    function verifica ($dados) 
    {
        $query = "SELECT cod FROM clientes WHERE email = :email";
        try{
            $stm = $this->db->prepare ( $query );
            $stm->bindParam( ':email',$dados['_email']);
            $stm->execute();
            $cod = $stm->fetchAll( PDO::FETCH_COLUMN, 0);
            if ( empty( $cod ))
                $this->cadastrar( $dados );
            else
                $this->message = "Usuario já cadastrado!";
        } catch (PDOException $e) {
            $this->message = $e->getMessage();
        }
    }
    
    function cadastrar( $dados )
    {
        $this->screen->message ='Usuario cadastrado com sucesso';
        $query = "INSERT INTO clientes "
                . "( usuario, nome, email, senha, endereco, endereco2, pais, uf, cep ) "
                . "VALUES ( :usuario, :nome, :email, :senha, :endereco, :endereco2, :pais, :uf, :cep )";
        try {
            $stm = $this->db->prepare( $query );
            $nome = $dados[ '_nome' ] . ' ' . $dados[ '_sobrenome' ];
            $stm->bindParam( ':usuario', $dados[ '_usuario' ] );
            $stm->bindParam( ':nome', $nome  );
            $stm->bindParam( ':email', $dados[ '_email' ] );
            $stm->bindParam( ':senha', base64_encode( $dados[ '_senha' ] ) );
            $stm->bindParam( ':endereco', $dados[ '_endereco' ] );
            $stm->bindParam( ':endereco2', $dados[ '_endereco2' ] );
            $stm->bindParam( ':pais', $dados[ '_pais' ] );
            $stm->bindParam( ':uf', $dados[ '_uf' ] );
            $stm->bindParam( ':cep', $dados[ '_cep' ] );
            $stm->execute();
         } catch ( PDOException $e ) {
            $this->message = $e->getMessage();
        }    
    }
}
