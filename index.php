<?php

include_once __DIR__ . '/utilities/function.php';
session_start();

$passLength = intval($_GET['password-length']);
$password = generatePassword($passLength);
$_SESSION['password'] = $password;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password generator</title>

    <!-- CSS -->
    <link rel="stylesheet" href="./style/style.css">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
</head>

<body id="body">

    <header class="container text-center my-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center mb-4">
                        Strong Password Generator
                    </h1>
                    <h2 class="text-center mb-4 text-white">
                        Genera una password sicura
                    </h2>
                </div>
            </div>
        </div>
    </header>

    <main class="container my-5">
        <div class="row">
            <div class="col-12">
                <!-- Titoli -->


                <!-- Alert -->
                <div class=" col-12 alert alert-primary mb-4" role="alert">
                    <?php
                    if (isset($_GET['password-length'])) {
                        header("Location: ./result.php");
                        echo "La tua password è:" . "<strong> $password </strong>";
                    } else {
                        echo "Nessun parametro valido inserito";
                    }
                    ?>
                </div>

                <!-- Form -->
                <form action="./index.php" method="GET" class="bg-white mb-4 p-4 rounded">
                    <div class="row">
                        <div class="col-7">
                            <div class="mb-3">
                                <label for="password-length">Lunghezza password: </label>
                            </div>
                            <div class="mb-3">
                                <label for="repeatRadio" class="mb-5">
                                    Consenti ripetizioni di uno o più caratteri:
                                </label>
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="mb-3">
                                <input type="number" name="password-length" id="password-length">
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="repeatRadio" id="repeatRadio"
                                    value="1" checked>
                                <label class="form-check-label" for="repeatRadio">
                                    Si
                                </label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="repeatRadio" id="repeatRadio"
                                    value="0">
                                <label class="form-check-label" for="repeatRadio">
                                    No
                                </label>
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="Letters" name="letters">
                                <label class="form-check-label" for="Lettere">Lettere</label>
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" name="numbers" id="numbers">
                                <label class="form-check-label" for="Numeri">Numeri</label>
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" name="symbols" id="symbols">
                                <label class="form-check-label" for="Simboli">Simboli</label>
                            </div>
                        </div>
                    </div>




                    <button type="submit" class="btn btn-primary">Invia</button>
                    <button type="reset" class="btn btn-secondary">Annulla</button>
                </form>
            </div>
        </div>










    </main>

</body>

</html>