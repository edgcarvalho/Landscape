<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procure Viagem</title>
    <link rel="stylesheet" href="styles/styleproViagem.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>

<body>

    <section>
        <header>
            <nav class="navbar navbar-expand-lg  navbar-light">
                <div class="container">
                    <a class="navbar-brand" href="homeLog.php">
                        <img src="img/logo.png" alt="">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="text-white lnr lnr-menu"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
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

    <div class="form">
        <form method="POST" action="processaViagem.php">
            <div class="form-group">
                <h1 align="center">Procurando sua Viagem Perfeita</h1>
                <div class="row">
                    <div class="col-lg-7 mx-auto" style="justify-content: center; align-items:center; display:flex">

                        <div class="p-5" style="padding: 30px; width:950px">

                            <label for="titulo" style="margin-bottom:15px">Escolha a data para sua viagem:</label>
                            <div class="mb-3" style="height:50px; align-items: center; justify-content:flex-start; display:flex">

                                <label for="check-in" class="date" style="align-items: flex-start; justify-content:flex-start ; display:inline-table">Check-in:</label>
                                <input type="date" class="form-control" style="width:350px; margin-left:10px;" id="checkin_cliente" name="checkin_cliente">

                                <label for="check-out" class="date">Check-out:</label>
                                <input type="date" class="form-control" style="width:310px; margin-left:10px" id="checkout_cliente" name="checkout_cliente">
                            </div>

                            <label for="titulo2" style="margin-bottom:15px">Quantidade de pessoas?:</label>
                            <div class="mb-3 pergunta2" style="height:50px; align-items: center; justify-content:flex-start; display:flex">

                                <label for="quantAdulto" class="end" style="align-items: flex-start; justify-content:flex-start ; display:inline-table">Adultos:</label>
                                <input type="number" class="form-control" style="width:355px; margin-left:10px; margin-right:30px " id="adulto_cliente" name="adulto_cliente">

                                <label for="quantCriança" class="senha1">Crianças:</label>
                                <input type="number" class="form-control" style="width:320px; margin-left:15px" id="crianca_cliente" name="crianca_cliente">

                            </div>
                            <div class="mb-3" style="height:50px; width:850px; align-items: center; justify-content:flex-start; display:flex ;">

                                <label for="number" class="number" style="align-items: flex-start; justify-content:flex-start ; display:flex ">Quantos quartos precisa?</label>
                                <input type="number" class="form-control" style="width:580px; margin-left:60px " id="quarto_cliente" name="quarto_cliente">

                            </div>
                            <div class="mb-3">

                                <label for="pergunta1" class="pergunta1">O que mais combina com a sua personalidade?</label>
                                <br><br>
                                <div class="radio" style="margin-top:-10px; align-items:center; justify-content:center; display:flex; margin-right:20px">

                                    <div class="form-check m-2">
                                        <input class="form-check-input" type="radio" name="personalidade_cliente" id="personalidade_cliente" value="1" checked>
                                        <label class="form-check-label" for="exampleRadios1">
                                            Aventureiro
                                        </label>
                                        <p>
                                    </div>
                                    <div class="form-check m-2">
                                        <input class="form-check-input" type="radio" name="personalidade_cliente" id="personalidade_cliente" value="2">
                                        <label class="form-check-label" for="exampleRadios2">
                                            Romântico
                                        </label>
                                        <p>
                                    </div>
                                    <div class="form-check m-2">
                                        <input class="form-check-input" type="radio" name="personalidade_cliente" id="personalidade_cliente" value="3" checked>
                                        <label class="form-check-label" for="exampleRadios1">
                                            Radical
                                        </label>
                                        <p>
                                    </div>
                                    <div class="form-check m-2">
                                        <input class="form-check-input" type="radio" name="personalidade_cliente" id="personalidade_cliente" value="4">
                                        <label class="form-check-label" for="exampleRadios2">
                                            Cultural
                                        </label>
                                        <p>
                                    </div>
                                    <div class="form-check m-2">
                                        <input class="form-check-input" type="radio" name="personalidade_cliente" id="personalidade_cliente" value="5" checked>
                                        <label class="form-check-label" for="exampleRadios1">
                                            Musical
                                        </label>
                                        <p>
                                    </div>
                                    <div class="form-check m-2">
                                        <input class="form-check-input" type="radio" name="personalidade_cliente" id="personalidade_cliente" value="6" checked>
                                        <label class="form-check-label" for="exampleRadios1">
                                            Intercambio
                                        </label>
                                        <p>
                                    </div>
                                    <div class="form-check m-2">
                                        <input class="form-check-input" type="radio" name="personalidade_cliente" id="personalidade_cliente" value="7" checked>
                                        <label class="form-check-label" for="exampleRadios1">
                                            Gatronomico
                                        </label>
                                        <p>
                                    </div>
                                    <div class="form-check m-2">
                                        <input class="form-check-input" type="radio" name="personalidade_cliente" id="personalidade_cliente" value="8" checked>
                                        <label class="form-check-label" for="exampleRadios1">
                                            Luxuoso
                                        </label>
                                        <p>
                                    </div>

                                </div>

                            </div>
                            <div class="mb-3" style="width:900px; display:flex; margin-top:10px">

                                <div class="mb-3" style="width:800px; display:grid">

                                    <label for="experiencia" class="experiencia" style="align-items: flex-start; justify-content:flex-start ; display:inline-table">Qual experiência quer viver oferece: </label>
                                    <input type="text" class="form-control" style="width:350px; " id="experiencia_cliente" name="experiencia_cliente">

                                </div>

                                <div class="mb-3" style="width:900px; display:grid">

                                    <label for="refeicao" class="refeicao">Prefere que o local dispobilize refeição: </label>
                                      <select id="refeicao_cliente" name="refeicao_cliente" >
                                        <option value="S">Sim</option>
                                        <option value="N">Não</option>
                                      </select>
                                </div>

                            </div>
                            <br>
                            <div class="button" align="center">
                                <button type="submit" class="btn-final">Procurar</a></button>
                            </div>

                        </div>
                    </div>

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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</html>