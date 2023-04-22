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
    <title>Dicas</title>
    <link rel="stylesheet" href="styles/styleDicas.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

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

    <br>
    <br>

    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 float-start p-5">
                <h2 class="fs-5 m-0" style="color: black;">Você que é aventureiro... </h2>
                <p>
                <h5 class="disply-6">Bonito - MS</h5>
                <hr>
                <p class="fst-normal" style="color:black; text-align:justify">
                    Sinônimo de maravilhas naturais e aventura, principalmente para quem não abre mão de emoção e
                    adrenalina,
                    o município de Bonito, no Mato Grosso do Sul,
                    é o destino certo para aficionados por esportes radicais e para quem quer relaxar e ficar em
                    sintonia com a natureza.
                    Aquários naturais, rios de águas cristalinas, grutas,
                    cachoeiras e uma biodiversidade incrível fazem parte do patrimônio natural de Bonito, que,
                    trocadilhos à parte, é realmente maravilhoso. Entre as atrações no local estão a Gruta Lago Azul,
                    cenário de novelas e filmes, o Aquário Natural, com uma grande variedade de peixes e outras espécies
                    aquáticas, e o Abismo Anhumas, com atividades como rapel, mergulho com cilindro, passeios de bote e
                    flutuação.
                </p>
            </div>

            <div class="col-12 col-sm-12 col-md-12 col-lg-6 float-start p-2">
                <img src="img/bonito.jpg" alt="" style="width: 100%; height: 100%; border-style: 5px;">
            </div>
        </div>
        <hr>
        <br>

        <div class="row">

            <div class="col-12 col-sm-12 col-md-12 col-lg-6 float-start p-2">
                <img src="img/gramdos.jpg" alt="" style="width: 100%; height: 100%;">
            </div>

            <div class="col-12 col-sm-12 col-md-12 col-lg-6 float-start p-5">
                <h4 class="fs-5 m-0" style="color: black;">Você que é romântico... </h4>
                <p>
                <h5 class="disply-6">Gramado - RS</h5>
                <hr>
                <p class="fst-normal" style="color:black; text-align:justify">
                    Fãs de chocolate? Então vocês vão se apaixonar por Gramado! Além de ser uma cidade bem agradável e
                    com o clima ideal para curtir o tempo juntos,
                    a gastronomia é um atrativo à parte — com destaque para o fondue —, e o chocolate da região é
                    considerado um dos melhores! Na Páscoa,
                    há um Festival do Chocolate com direito a carros alegóricos, encenações artísticas e celebrações
                    religiosas.
                </p>
            </div>
        </div>
        <hr>
        <br>

        <div class="row">

            <div class="col-12 col-sm-12 col-md-12 col-lg-6 float-start p-5">
                <h4 class="fs-5 m-0" style="color: black;">Que tal um intercâmbio... </h4>
                <p>
                <h5 class="disply-6">Irlanda</h5>
                <hr>
                <p class="fst-normal" style="color:black; text-align:justify">
                    Uma das maiores potências do mundo, também é referência número um em qualidade de educação
                    internacional.
                    Para curso de idiomas, oferece o maior número de opções de cidades, que vão de leste a oeste.
                </p>
            </div>

            <div class="col-12 col-sm-12 col-md-12 col-lg-6 float-start p-2">
                <img src="img/irlanda.jpg" alt="" style="width: 100%; height: 100%;">
            </div>
        </div>
        <hr>
        <br>
        <div class="row">

            <div class="col-12 col-sm-12 col-md-12 col-lg-6 float-start p-2">
                <img src="img/paulista.jpg" alt="" style="width: 100%; height: 100%;">
            </div>

            <div class="col-12 col-sm-12 col-md-12 col-lg-6 float-start p-5">
                <h4 class="fs-5 m-0" style="color: black;">Pop & Art... </h4>
                <p>
                <h5 class="disply-6">São Paulo - SP</h5>
                <hr>
                <p class="fst-normal" style="color:black; text-align:justify">
                    São Paulo é uma cidade tão recheada culturalmente que é possível passar semanas conhecendo seus
                    museus, galerias e centros de exposição.
                    Escolha uma região da cidade e você terá uma infinidade de lugares para conhecer.
                    No Centro, é impossível não se encantar com a beleza do Theatro Municipal, da Catedral da Sé e do
                    prédio do Centro Cultural Banco do Brasil.
                    Para uma experiência gastronômica e cultural, vá a Casa de Francisca, espaço musical instalado no
                    histórico Palacete Teresa,
                    que tem restaurante e shows intimistas de artistas consagrados e emergentes.
                </p>
            </div>
        </div>

    </div>


    <div class="vermais">
        <button type="submit" class="btn-primary"> veja mais</button>
    </div>







    <footer class="footer-area section-gap">
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>
<script src="custom.js"></script>

</html>