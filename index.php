<?php

$passLength = $_GET['password-length'];
$password = generatePassword();

// Funzioni

function generatePassword() {
    $allCharacters = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
    return (str_shuffle($allCharacters));
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password generator</title>
</head>

<body>

    <header>
        <h1>
            Strong Password Generator
        </h1>
    </header>

    <main>
        <div class="form">
            <form action="./index.php" action="GET">
                <label for="password-length">Type password length: </label>
                <input type="number" name="password-length" id="password-length">
                <button type="submit">Submit</button>
            </form>
        </div>

        <div class="result">
            <p>

                <?php 
                    echo "Your password is:" . " $password "
                ?>
            </p>


        </div>
    </main>

</body>

</html>