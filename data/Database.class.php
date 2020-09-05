<?php
require('config.php');

class Database
{
    protected $connection;

    function __construct()
    {
        try{
            $this->connection = new mysqli($HOST, $USERNAME, $PASSWORD, $DATABASE);
        }catch(Exception $e){
            throw new Exception($e->getMessage());
        }
    }
}
