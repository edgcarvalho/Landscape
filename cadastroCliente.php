<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/stylecadastroCli.css">
</head>

<body>
    <section>
        <header>
            <nav class="navbar navbar-expand-lg  navbar-light">
                <div class="container">
                    <a class="navbar-brand" href="index.php">
                        <img src="img/logo.png" alt="">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="text-white lnr lnr-menu"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="login.php">Login</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
    </section>

    <div class="form">

        <form method="POST" action="processacad_Cli.php">
            <div class="form-group">
                <h1 align="center">Cadastro</h1>
                <br>
                <div class="mb-3" style="align-items: center; justify-content:flex-start; display:flex">
                    <label for="Nome" class="nome">Nome:</label>
                    <input type="text" class="form-control" id="nome_cliente" name="nome_cliente">
                </div>
                <div class="mb-3" style="align-items: center; justify-content:flex-start; display:flex">
                    <label for="email" class="email">E-mail: </label>
                    <input type="email" class="form-control" id="email_cliente" name="email_cliente" style="width:820px;">
                </div>
                <div class="mb-3 " style="align-items: center; justify-content:flex-start; display:flex">
                    <label for="senha" class="dta">Senha: </label>
                    <input type="password" class="form-control" id="senha_cliente" name="senha_cliente">
                </div>
                <div class="mb-3" style="height:50px; align-items: center; justify-content:flex-start; display:flex">
                    <label for="end" class="end" style="align-items: flex-start; justify-content:flex-start ; display:inline-table">Endereço:</label>
                    <input type="text" class="form-control" style="width:800px; " id="end_cliente" name="end_cliente">
                </div>
                <div class="mb-3" style="height:50px; align-items: center; justify-content:flex-start; display:flex">
                    <label for="cidade" class="email" style="align-items: flex-start; justify-content:flex-start ; display:inline-table">Cidade:</label>
                    <input type="text" class="form-control" style="width:300px; " id="cidade_cliente" name="cidade_cliente">

                    <label for="ufe" class="dta">UF:</label>
                    <select id="uf_cliente" name="uf_cliente" style="width:200px; height:35px; border-radius:20px; justify-content:center; align-items:center; padding:5px">
                        <option value="">Escolha</option>
                        <option value="AC">Acre</option>
                        <option value="AL">Alagoas</option>
                        <option value="AP">Amapá</option>
                        <option value="AM">Amazonas</option>
                        <option value="BA">Bahia</option>
                        <option value="CE">Ceará</option>
                        <option value="DF">Distrito Federal</option>
                        <option value="ES">Espírito Santo</option>
                        <option value="GO">Goiás</option>
                        <option value="MA">Maranhão</option>
                        <option value="MT">Mato Grosso</option>
                        <option value="MS">Mato Grosso do Sul</option>
                        <option value="MG">Minas Gerais</option>
                        <option value="PA">Pará</option>
                        <option value="PB">Paraíba</option>
                        <option value="PR">Paraná</option>
                        <option value="PE">Pernambuco</option>
                        <option value="PI">Piauí</option>
                        <option value="RJ">Rio de Janeiro</option>
                        <option value="RN">Rio Grande do Norte</option>
                        <option value="RS">Rio Grande do Sul</option>
                        <option value="RO">Rondônia</option>
                        <option value="RR">Roraima</option>
                        <option value="SC">Santa Catarina</option>
                        <option value="SP">São Paulo</option>
                        <option value="SE">Sergipe</option>
                        <option value="TO">Tocantins</option>
                        <option value="EX">Estrangeiro</option>
                    </select>

                    <label for="pais" class="Nome">País:</label>
                    <input type="text" class="form-control" id="pais_cliente" name="pais_cliente" style="width:250px">

                </div>

                <div class="mb-3">

                    <label for="exampleInputPassword1" class="email">O que mais combina com a sua personalidade?</label>
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
                <div class="mb-3" style="height:50px; align-items: center; justify-content:flex-start; display:flex">
                    <label for="gosto" class="pergunta" style="align-items: flex-start; justify-content:flex-start ; display:inline-table">Gosta de viajar com:</label>
                    <input type="text" class="form-control" style="width:250px; " id="gosto_cliente" name="gosto_cliente">

                    <label for="salario" class="senha1">Qual a sua média salarial:</label>
                    <select id="salario_cliente" name="salario_cliente" style="width:200px; height:35px; border-radius:20px; justify-content:center; align-items:center; padding:5px">
                        <option value="">Escolha</option>
                        <option value="1"> 1 - Salário Mínimo</option>
                        <option value="2"> 2 - Salário Mínimo</option>
                        <option value="3"> 3 ou + - Salário Mínimo</option>
                    </select>
                </div>
                <div class="button" align="center">
                    <button type="submit" class="btn" value="Cadastrar" style="color:white;background-color: rgb(0, 74, 159);">Finalizar</button>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</html>