<?php
 
    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'site_pcct';

    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    mysqli_set_charset($conexao, "utf8");
    
    //Teste de conexão
    //if($conexao -> connect_errno){
    //    echo "error";
    //}else{
    //    echo "conexão efetuada com sucesso";
    //}
?>