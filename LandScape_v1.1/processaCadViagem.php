<?php

if ($_POST) {
	$txtname = $_POST['nome_viagem'];
	$txtLocal = $_POST['local_viagem'];
	$date_checkin = $_POST['checkin_viagem'];
	$date_checkout = $_POST['checkout_viagem'];
	$number_adultos = $_POST['adulto_viagem'];
	$number_crianca = $_POST['crianca_viagem'];
	$number_quarto = $_POST['quarto_viagem'];
	$select_tipo = $_POST['personalidade_viagem'];
	$txt_exp = $_POST['experiencia_viagem'];
	$txt_des = $_POST['descricao_viagem'];
	$txt_refeicao = $_POST['refeicao_viagem'];
	$fileName = $_FILES['file_img']['name'];
	$fileTempName = $_FILES['file_img']['tmp_name'];
	// $file_img = $_FILES['img_of'];

	include "conexao.php";
	$st = $conexao->prepare("INSERT INTO tbl_cad_viagem (nome_viagem, local_viagem, checkin_viagem, checkout_viagem, adultos_viagem, crianca_viagem, quarto_viagem, personalidade_viagem, experiencia_viagem, descricao_viagem, refeicao_viagem, file_img) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)");

	$st->bindParam(1, $txtname);
	$st->bindParam(2, $txtLocal);
	$st->bindParam(3, $date_checkin);
	$st->bindParam(4, $date_checkout);
	$st->bindParam(5, $number_adultos);
	$st->bindParam(6, $number_crianca);
	$st->bindParam(7, $number_quarto);
	$st->bindParam(8, $select_tipo);
	$st->bindParam(9, $txt_exp);
	$st->bindParam(10, $txt_des);
	$st->bindParam(11, $txt_refeicao);
	$st->bindParam(12, $fileName);

	$fileDestination = 'upload/' . $fileName;
	move_uploaded_file($fileTempName, $fileDestination);

	if ($st->execute()) {
		if ($st->rowCount() > 0) {
			echo "<script>alert('Cadastro realizado com sucesso!');</script>";
			header("refresh: 0, homeLog.php");
		} else {
			echo "Erro nenhuma linha executada";
		}
	} else {
		echo "Erro no execute()";
	}
}