<?php

function generatePassword($chosenLength) {
    $allCharacters = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!$&/()=?^*°-_.:,;";
    return substr(str_shuffle($allCharacters), 0, $chosenLength);
}

?>