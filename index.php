<!-- <?php
    echo "Hello World";
?> -->

<form action="index.php" method="GET">
    <input type="number" name="lunghezza" placeholder="lunghezza">
    <button type="submit">Invia</button>
</form>

<?php
$passwordElements = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!\"#$%&'()*+,-./:;<=>?@[\\]^_`{|}~";

$n = 0;
$n = $_GET['lunghezza'];

//echo $n . "<br>";

$password = array();

for ($i = 0; $i < $n; $i++) {
    array_push($password, $passwordElements[rand(0, strlen($passwordElements) - 1)]);
}

echo implode("", $password);

?>
