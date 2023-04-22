<?php 
    try {
       
        $conexao = new PDO("mysql:host=localhost; dbname=bdlandscape", "root", "");
         $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
         //O método setAttribute() nos permite adicionar atributos no objeto de conexão
         $conexao->exec("set names utf8");
         //echo"banco usavel";
     } catch (PDOException $erro) {
         echo "Erro na conexão:" . $erro->getMessage();
     }

?>