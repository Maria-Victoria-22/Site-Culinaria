<?php

Abstract class Connect
{
    public $db;
    public function __construct()
    {
        try {
            $this->db = new PDO(
                'mysql:host=localhost;dbname=banco_pi',
                'root',
                '',
                array(
                    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
                )
            );
            $this->db->setAttribute(
                PDO::ATTR_ERRMODE,
                PDO::ERRMODE_EXCEPTION
            );
            $this->db->setAttribute(
                PDO::ATTR_ORACLE_NULLS,
                PDO::NULL_EMPTY_STRING
            );
        } catch ( Exception $e ) {
            die( $e->getMessage() );
        }
    }
}