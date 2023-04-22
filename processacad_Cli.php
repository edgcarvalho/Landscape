<?php

if ($_POST) {
	$txt_name = $_POST['nome_cliente'];
	$txt_email = $_POST['email_cliente'];
	$txt_senha = $_POST['senha_cliente'];
	$txt_end = $_POST['end_cliente'];
	$select_uf = $_POST['uf_cliente'];
	$txt_cidade = $_POST['cidade_cliente'];
	$txt_pais = $_POST['pais_cliente'];
	$radio_personalidade = $_POST['personalidade_cliente'];
	$select_salario = $_POST['salario_cliente'];
	$txt_gosto = $_POST['gosto_cliente'];
	

	include "conexao.php";
	$st = $conexao->prepare("INSERT INTO tbl_cliente (nome_cliente, email_cliente, senha_cliente,end_cliente,uf_cliente,cidade_cliente, pais_cliente, personalidade_cliente,salario_cliente, gosto_cliente) VALUES (?,?,?,?,?,?,?,?,?,?)");
	
	$st->bindParam(1, $txt_name);
	$st->bindParam(2, $txt_email);
	$st->bindParam(3, $txt_senha);
	$st->bindParam(4, $txt_end);
	$st->bindParam(5, $select_uf);
	$st->bindParam(6, $txt_cidade);
	$st->bindParam(7, $txt_pais);
	$st->bindParam(8, $radio_personalidade);
	$st->bindParam(9, $select_salario);
	$st->bindParam(10, $txt_gosto);

	if ($st->execute()) {
		if ($st->rowCount() > 0) {
			echo "<script>alert('Cadastro realizado com sucesso!');</script>";
			header("refresh: 0, login.php");
		} else {
			echo "Erro nenhuma linha executada";
		}
	} else {
		echo "Erro no execute()";
	}
}

?>