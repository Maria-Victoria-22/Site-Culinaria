<?php

if ( !empty( $_POST ) ) {
    ajax( $_POST );
}

function ajax( $dados )
{
    $dados[ 'result' ] = verifica( $dados );
    echo json_encode( $dados[ 'result' ] ); 
    exit;
}

function save( $dados )
{
    $dados[ 'result' ] = 0;
    include_once 'screen.php';
    $tag = new Screen();
    $query = "INSERT INTO newsletter "
            . "( nome, email, telefone ) "
            . "VALUES ( :nome, :email, :telefone )";
    try {
        $stm = $tag->db->prepare( $query );
        $stm->bindParam( ':nome', $dados[ 'nome']  );
        $stm->bindParam( ':email', $dados[ 'email' ] );
        $stm->bindParam( ':telefone', $dados[ 'telefone'] );
        $stm->execute();
    } catch ( PDOException $e ) {
        $dados[ 'result' ] = $e->getCode();
    }
    return $dados[ 'result' ];
}

function verifica( $dados )
{
    include_once 'screen.php';
    $tag = new Screen();
    $query = "SELECT id FROM newsletter WHERE email = :email ";
    try {
        $stm = $tag->db->prepare( $query );
        $stm->bindParam( ':email' , $dados[ 'email' ] );
        $stm->execute();
        $cod = $stm->fetchAll( PDO::FETCH_COLUMN, 0 );
        if ( empty( $cod ) )
            $dados[ 'result' ] = save( $dados );
        else
            $dados[ 'result' ] = 1;
    } catch ( PDOException $e) {
            $dados[ 'result' ] = $e->getCode();
    }
    return $dados[ 'result' ];
}