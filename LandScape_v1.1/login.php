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
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/stylelogin.css">

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


    <div class="login" style="background-color:rgba(228, 228, 228, 0.438)">
        <div class="registration-form"  >

            <form method="POST" action="validarLogin.php">
                <div class="form-icon">
                    <span><img src="img/logo.png" alt=""></span>
                </div>
                <div class="form-group">
                    <h4 style="font-weight: bold;" align="center">Login</h4>
                    <label type="text" style="align-items: initial; justify-content:start; font-weight: bold;">Email:</label>
                    <input type="text" class="form-control item" id="email_cliente" name="email_cliente" placeholder="Usuario@gmail.com">
                </div>
                <div class="form-group">
                    <label type="text" style="align-items: initial; justify-content:start; font-weight: bold">Senha:</label>
                    <input type="password" class="form-control item" id="senha_cliente" name="senha_cliente" placeholder="Password">
                </div>
                <div class="button" align="center">
                    <button type="submit" class="btn" style="color:white; background-color: rgb(0, 74, 159); width:100px">ENTRAR</button>
                </div>
            </form>

            <div class="Cadastro">
                <label style="color:black; font-weight:normal;">Não possui uma conta? <a href="cadastroCliente.php" style="font-weight: bold; text-decoration:none; margin-left:5px">CADASTRE-SE</a></label>
            </div>
        </div>
    </div>

    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-2">
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