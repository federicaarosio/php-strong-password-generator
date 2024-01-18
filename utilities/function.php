<?php

function generatePassword($chosenLength) {
    $allCharacters = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!$&/()=?*-_.:,;";
    $letters = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
    $numbers = "0123456789";
    $symbols = "!$&/()=?*-_.:,;";

    //Vanno bene tutti i caratteri
    if ((isset($_GET["letters"]) && isset($_GET["numbers"]) && isset($_GET["symbols"]) || (!isset($_GET["letters"]) && !isset($_GET["numbers"]) && !isset($_GET["symbols"])))) {
        return substr(str_shuffle($allCharacters), 0, $chosenLength);
    //solo lettere
    } elseif (isset($_GET["letters"]) && !isset($_GET["numbers"]) && !isset($_GET["symbols"])) {
        return substr(str_shuffle($letters), 0, $chosenLength);
    //solo lettere e numeri
    } elseif (isset($_GET["letters"]) && isset($_GET["numbers"]) && !isset($_GET["symbols"])) {
        return substr(str_shuffle($letters . $numbers), 0, $chosenLength);
    //solo lettere e simboli
    } elseif (isset($_GET["letters"]) && !isset($_GET["numbers"]) && isset($_GET["symbols"])) {
        return substr(str_shuffle($letters . $symbols), 0, $chosenLength);
    //solo simboli e numeri
    } elseif (!isset($_GET["letters"]) && isset($_GET["numbers"]) && isset($_GET["symbols"])) {
        return substr(str_shuffle($symbols . $numbers), 0, $chosenLength);
    //solo simboli
    } elseif (!isset($_GET["letters"]) && !isset($_GET["numbers"]) && isset($_GET["symbols"])) {
        return substr(str_shuffle($symbols), 0, $chosenLength);
    //solo numeri
    } elseif (!isset($_GET["letters"]) && isset($_GET["numbers"]) && !isset($_GET["symbols"])) {
        return substr(str_shuffle($numbers), 0, $chosenLength);
    };

 
}

?>