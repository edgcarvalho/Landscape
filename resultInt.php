<?php
//Inicializado primeira a sessão para posteriormente recuperar valores das variáveis globais.
if (!isset($_SESSION)) {
    session_start();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styleestilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Intercâmbio</title>
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
                            <li><a href="dicasViagem.php">Dicas</a></li>
                            <li><a href="procuraViagem.php">Procurando</a></li>
                            <li><a href="sair.php">Log-out</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
    </section>

    <section>
        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/CapaIntercambio.png" class="d-block w-100" alt="...">
                </div>

            </div>
        </div>
    </section>
    <section id="scroll">
        <div class="container px-5">
            <?php
            include "conexao.php";
            $A = "SELECT * FROM tbl_cad_viagem ORDER BY id_viagem ASC";
            $A = "SELECT * FROM tbl_cad_viagem where personalidade_viagem = 6";
            try {
                $stmt = $conexao->prepare($A);
                if ($stmt->execute()) {
                    while ($rs = $stmt->fetch(PDO::FETCH_OBJ)) {
                        ?>
                        <div class="row gx-5 align-items-center">
                            <div class="col-lg-6">
                                <!-- //inserir as Imagens -->
                                <img src="upload/<?php echo $rs->file_img; ?>">

                            </div>
                            <div class="col-lg-6" style="color:black">
                                <div class="p-5">
                                    <h2 class="display-5">
                                        <?php echo "{$rs->nome_viagem} - "; ?>
                                    </h2>
                                    <h2 class="">
                                        <?php echo "{$rs->local_viagem}"; ?>
                                        </h4>
                                        <ul>
                                            <li>
                                                <?php echo "{$rs->checkin_viagem} até {$rs->checkout_viagem}"; ?>
                                            </li>

                                            <li>
                                                <?php echo "Quartos Disponiveis: {$rs->quarto_viagem}"; ?>
                                            </li>
                                            <li>
                                                <?php echo "Disponibiliza refeição: {$rs->refeicao_viagem}"; ?>
                                            </li>
                                            <p style="justify-content:center; text-align:justify"></p>
                                            <?php echo "Descrição de Experiencias: {$rs->descricao_viagem}"; ?>
                                            </p>
                                        </ul>
                                        <a class="btn btn-primary btn-xl rounded-pill mt-5" href="#scroll">Learn More</a>
                                </div>
                            </div>




                        <?php }
                }
            } catch (PDOException $erro) {
                echo "Erro na conexão:" . $erro->getMessage();
            }
            ?>
            </div>
    </section>



    <footer class="footer-area section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-5">
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>

</html>