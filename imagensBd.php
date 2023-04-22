<?php
//Inicializado primeira a sessão para posteriormente recuperar valores das variáveis globais.
if (!isset($_SESSION)) {
    session_start();
}

// var_dump($_FILES)
// if(isset($_FILES['file'])){
// 	echo "foi";
// }

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admim Imagens</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<link rel="stylesheet" href="styles/stylecadastroCli.css">
</head>

<body>
	<section>
		<header>
			<nav class="navbar navbar-expand-lg  navbar-light">
				<div class="container">
					<a class="navbar-brand" href="homeLog.php">
						<img src="img/logo.png" alt="">
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse"
						data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
						aria-expanded="false" aria-label="Toggle navigation">
						<span class="text-white lnr lnr-menu"></span>
					</button>

					<div class="collapse navbar-collapse justify-content-end align-items-center"
						id="navbarSupportedContent">
						<ul class="navbar-nav">
							<li><a href="homeLog.php">Home</a></li>
							<li><a href="#about">Destaque</a></li>
							<li><a href="#dica">Dicas</a></li>
							<li><a href="procuraViagem.php">Procurando</a></li>
							<li><a href="sair.php">Log-out</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</header>
	</section>

	<div class="form">

		<form method="POST" enctype="multipart/form-data" action="processaFile.php">
			<div class="form-group">
				<h1 align="center">Cadastro</h1>
				<br>
				<div class="mb-3" style="align-items: center; justify-content:flex-start; display:flex">
					<label for="Nome" class="nome">Nome:</label>
					<input type="text" class="form-control" id="nome_img" name="nome_img">
				</div>
				<div class="mb-3" style="align-items: center; justify-content:flex-start; display:flex">
					<label for="Nome" class="nome">Descrição:</label>
					<input type="text" class="form-control" id="des_img" name="des_img">
				</div>
				<div class="mb-3 " style="align-items: center; justify-content:flex-start; display:flex">
					<label for="file" class="file">Upload: </label>
					<input type="file" class="form-control" id="file_img" name="file_img">
				</div>

				<div class="button" align="center">
					<button type="submit" class="btn" value="Cadastrar"
						style="color:white;background-color: rgb(0, 74, 159);">Finalizar</button>
				</div>
				<br>

			</div>
		</form>

	</div>

	<footer class="footer-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-5 col-md-6 col-sm-5">
					<div class="single-footer-widget ">
						<h6>About Us</h6>
						<p>
							Ana Flávia e Edmara
						</p>
					</div>
				</div>
			</div>
		</div>
	</footer>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
	integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
	crossorigin="anonymous"></script>

</html>