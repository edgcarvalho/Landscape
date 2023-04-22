<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Index</title>
    <link rel="stylesheet" href="styles/styleindex.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>

<body>
    <section>
        <header>
            <nav class="navbar navbar-expand-lg  navbar-light">
                <div class="container">
                    <a class="navbar-brand" href="index.php">
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
                            <li><a href="index.php">Home</a></li>
                            <li><a href="#about">Destaque</a></li>
                            <li><a href="#dica">Dicas</a></li>
                            <li><a href="login.php">Login</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
    </section>

    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <a href="procuraViagem.php" style="text-decoration: none;"><button type="button"
                        class="btn btn-primary btn-lg btn-block">Procure a viagem perfeita pra você</button></a>
                <img class="d-block w-100" src="img/slider1.jpg" alt="First slide">

            </div>
        </div>
    </div>

    <section class="section-gap info-area" id="about" style="margin-top: 100px;">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-40 col-lg-8">

                </div>
            </div>
            <br>
            <div class="single-info row mt-40">
                <div class="col-lg-6 col-md-12 mt-120 text-center no-padding info-left">
                    <div class="info-thumb" style="height: 650px;">
                        <img src="img/about.avif" class="img-fluid" alt="" style="width: auto;">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 no-padding info-rigth">
                    <div class="info-content">
                        <h2 class="pb-30">VIAGEM À GRÉCIA 4<br>DIAS - IDA E VOLTA</h2>
                        <br>


                        <h3 style="color: black;">
                            Nessa viagem oferecemos:
                        </h3>
                        <br>
                        <p style="color: black; font-size:18px;">
                            1 Quarto para casal <br>
                            Quarto com Ar-condiconado<br>
                            Refeição no Hotel<br>
                            Guia Turistico (Inglês)<br>
                            Wifi Gratis<br>
                            Estacionamento

                        </p>
                        <br>

                        <h3>
                            Entre em contato com:
                        </h3>
                        <h6 style="color: black;">
                            RESPONSAVEL PELA HOSPEDAGEM E GUIA TURÍSTICO:
                        </h6>
                        <br>
                        <a style="color:white; text-decoration:none"
                            href="https://www.trivago.com.br/pt-BR/lm?themeId=836&search=200-64&sem_keyword=viagens%20gr%C3%A9cia&sem_creativeid=598373299324&sem_matchtype=p&sem_network=g&sem_device=c&sem_placement=&sem_target=&sem_adposition=&sem_param1=&sem_param2=&sem_campaignid=11513060054&sem_adgroupid=112807912552&sem_targetid=kwd-478471413501&sem_location=1031663&cipc=sem&cip=5519000318&gclid=CjwKCAjwrdmhBhBBEiwA4Hx5g1dP5He95ygT0ciNbz-Q8IGPEq_wIe7R5K6jupy6fur2hjKa-KKW9xoC0RIQAvD_BwE"><button
                                style="border-radius: 20px; width: 150px; height: 35px;border:none; background: #2578F4; color:#fff; "
                                type="submit">Clique aqui</a></button>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="feature-area section-gap" id="dica" id="secvice">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-60 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10">Cadastre seu destino aqui:</h1>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 ">
                    <div class="single-feature mb-30">
                        <div class="title d-flex flex-row pb-20">
                            <span class="lnr lnr-user"></span>
                            <h4><a href="cadastro_viagem.php">Cadastre seu hotel</a></h4>
                        </div>
                        <p>
                            Cadastre seu hotel, e atraia diversos hospedes!! Tem um a sua espera
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 ">
                    <div class="single-feature mb-30">
                        <div class="title d-flex flex-row pb-20">
                            <span class="lnr lnr-license"></span>
                            <h4><a href="cadastro_destino.php">Cadastre um destino</a></h4>
                        </div>
                        <p>
                            Nada melhor que um destino perfeito! Tem um? Cadastre aqui!
                        </p>
                    </div>
                </div>
            </div>
    </section>

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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>

</html>