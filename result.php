<?php
    session_start();

 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password generated</title>
</head>

<body>
    <p>
        La tua password è: <?php echo $_SESSION['password']; ?>!
    </p>
</body>

</html>