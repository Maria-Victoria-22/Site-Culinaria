<?php

include_once "screen.php";

Class Home extends Screen 
{
    function __construct() {
        parent::__construct();
        
        $this->screen->login = ROOT . 'login.php';
        $this->screen->cadastrar = ROOT . 'cadastrar.php';
        $this->produtos();
    }
     function produtos () 
    {
        $query = "SELECT * FROM produtos";
        try{
            $stm = $this->db->prepare ( $query );
            $stm->execute();
            $this->screen->produtos = $stm->fetchALL(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            $this->message = $e->getMessage();
        }
    }
}

