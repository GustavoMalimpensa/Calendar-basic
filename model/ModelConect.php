<?php
namespace Model;
abstract class ModelConect
{
    protected function conectSB()
    {
        try {
            $con=new \PDO("mysql:host=".Host.";sdhome=".DB."",USER,PASS);
        } catch (\PDOException $erro){
            return $erro->getMessage();
        }
    }    
    
}

?>