<?php

function generaPassword ($lunghezza) {

$passwordElements = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!\"#$%&'()*+,-./:;<=>?@[\\]^_`{|}~";

$password = array();

for ($i = 0; $i < $lunghezza; $i++) {
    array_push($password, $passwordElements[rand(0, strlen($passwordElements) - 1)]);
}

return (implode("", $password));

}

?>
