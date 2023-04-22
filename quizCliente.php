<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/styleQuiz.css">


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

    <div class="container mt-5">
        <div class="d-flex justify-content-center row">
            <div class="col-md-10 col-lg-10">
                <div class="border">
                    <div class="question bg-white p-3 border-bottom">
                        <div class="d-flex flex-row justify-content-between align-items-center mcq">
                            <h4>MCQ Quiz</h4><span>(5 of 20)</span>
                        </div>
                    </div>
                    <div class="question bg-white p-3 border-bottom">
                        <div class="d-flex flex-row align-items-center question-title">
                            <h3 class="text-danger">Q.</h3>
                            <h5 class="mt-1 ml-2">Which of the following country has largest population?</h5>
                        </div>
                        <div class="ans ml-2">
                            <label class="radio"> <input type="radio" name="brazil" value="brazil"> <span>Brazil</span>
                            </label>
                        </div>
                        <div class="ans ml-2">
                            <label class="radio"> <input type="radio" name="Germany" value="Germany">
                                <span>Germany</span>
                            </label>
                        </div>
                        <div class="ans ml-2">
                            <label class="radio"> <input type="radio" name="Indonesia" value="Indonesia">
                                <span>Indonesia</span>
                            </label>
                        </div>
                        <div class="ans ml-2">
                            <label class="radio"> <input type="radio" name="Russia" value="Russia"> <span>Russia</span>
                            </label>
                        </div>
                    </div>
                    <div class="d-flex flex-row justify-content-between align-items-center p-3 bg-white"><button
                            class="btn btn-primary d-flex align-items-center btn-danger" type="button"><i
                                class="fa fa-angle-left mt-1 mr-1"></i>&nbsp;previous</button><button
                            class="btn btn-primary border-success align-items-center btn-success" type="button">Next<i
                                class="fa fa-angle-right ml-2"></i></button></div>
                </div>
            </div>
        </div>
    </div>


</html>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
<script src="script.js"></script>

</html>