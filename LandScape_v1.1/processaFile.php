<?php

if ($_POST) {
	$txt_name = $_POST['nome_img'];
	$txt_des = $_POST['des_img'];
	$fileName = $_FILES['file_img']['name'];
	$fileTempName = $_FILES['file_img']['tmp_name'];

	include "conexao.php";
	$st = $conexao->prepare("INSERT INTO tbl_imagem(nome_img, des_img, file_img ) VALUES (?,?,?)");

	$st->bindParam(1, $txt_name);
	$st->bindParam(2, $txt_des);
	$st->bindParam(3, $fileName);

	//$fileNemeNew = uniqid('', true) . "." . $fileActualExt;
	$fileDestination = 'upload/' . $fileName;
	move_uploaded_file($fileTempName, $fileDestination);

	if ($st->execute()) {
		if ($st->rowCount() > 0) {
			echo "<script>alert('Cadastro realizado com sucesso!');</script>";
			header("refresh: 0, resultAvent.php");
		} else {
			echo "Erro nenhuma linha executada";
		}
	} else {
		echo "Erro no execute()";
	}
}

?>