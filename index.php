<!-- <?php
    echo "Hello World";
?> -->

<form action="index.php" method="GET">
    <input type="number" name="lunghezza" placeholder="lunghezza">
    <button type="submit">Invia</button>
</form>

<?php

include __DIR__ . '/functions.php';

$lunghezza = 0;
$lunghezza = $_GET['lunghezza'];

//echo $n . "<br>";

echo generaPassword($lunghezza);

?>
