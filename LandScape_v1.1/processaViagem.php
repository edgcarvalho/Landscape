<?php

if ($_POST) {
	$date_checkin = $_POST['checkin_cliente'];
	$date_checkout = $_POST['checkout_cliente'];
	$number_adultos = $_POST['adulto_cliente'];
	$number_crianca = $_POST['crianca_cliente'];
	$number_quarto = $_POST['quarto_cliente'];
	$select_tipo = $_POST['personalidade_cliente'];
	$txt_exp = $_POST['experiencia_cliente'];
	$txt_refeicao = $_POST['refeicao_cliente'];
	// $fileName = $_FILES['file_img']['name'];
	// $fileTempName = $_FILES['file_img']['tmp_name'];
	// $file_img = $_FILES['img_of'];

	include "conexao.php";
	$st = $conexao->prepare("INSERT INTO tbl_procura (checkin_cliente,checkout_cliente,adulto_cliente,crianca_cliente,quarto_cliente,personalidade_cliente,experiencia_cliente,refeicao_cliente) VALUES (?,?,?,?,?,?,?,?)");
	$st->bindParam(1, $date_checkin);
	$st->bindParam(2, $date_checkout);
	$st->bindParam(3, $number_adultos);
	$st->bindParam(4, $number_crianca);
	$st->bindParam(5, $number_quarto);
	$st->bindParam(6, $select_tipo);
	$st->bindParam(7, $txt_exp);
	$st->bindParam(8, $txt_refeicao);
	// $st->bindParam(9, $file_img);


	if ($st->execute()) {
		if ($st->rowCount() > 0) {
			$valor = $_POST['personalidade_cliente'];

			$sql = "SELECT personalidade_cliente FROM personalidade WHERE id = 1";

			if ($valor == 1) {
				header("Location: resultAvent.php");
				exit();
			} else if ($valor == 2) {
				header("Location: resultRoma.php");
				exit();
			} else if ($valor == 3) {
				header("Location: resultRad.php");
				exit();
			} else if ($valor == 4) {
				header("Location: resultCult.php");
				exit();
			} else if ($valor == 5) {
				header("Location: resultMusical.php");
				exit();
			} else if ($valor == 6) {
				header("Location: resultInt.php");
				exit();
			} else if ($valor == 7) {
				header("Location: pagina2.php");
				exit();
			} else {
				header("Location: pagina2.php");
				exit();
			}
		} else {
			echo "Erro nenhuma linha executada";
		}
	} else {
		echo "Erro no execute()";
	}
}