<?php 

    include "conexao.php";

    $data = filter_input_array(INPUT_POST, FILTER_DEFAULT); 

    $st = $conexao->prepare("SELECT * FROM tbl_cliente where email_cliente = :email_cliente and  senha_cliente = :senha_cliente");
    $st->bindValue('email_cliente', $data['email_cliente']);
    $st->bindValue('senha_cliente', $data['senha_cliente']);

    if($st->execute()){
            if ($st->rowCount() > 0) {
                if($row = $st->fetch(PDO::FETCH_ASSOC)){
                    extract($row);
                    session_start();
                    $_SESSION['email_cliente'] = $_POST['email_cliente'];
                    $_SESSION['senha_cliente'] = $_POST['senha_cliente'];                

                    header('LOCATION: homelog.php'); 
                }   
            } else {
                echo "<script>alert('Senha ou Email incorreto!');</script>";
                echo "<meta http-equiv='refresh' content='1;URL=login.php'>";
            }

    }
?>