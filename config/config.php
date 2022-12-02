<?php
    #Caminho absolutos
    $dirInt="";
    define('DIRPAGE',"http://{$_SERVER['HTTP_HOST']}/{$dirInt}");
    $bar=(substr($_SERVER['DOCUMENT_ROOT'],-1)=='/')?"":"/";
    define('DIRREQ',"{$_SERVER['DOCUMENT_ROOT']}{$bar}{$dirInt}");

    #Banco de dados
    $dbHost = '127.0.0.1:3306';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = '';

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
    if($conexao->connect_errno)
    {
        echo "Erro";
    }
?>