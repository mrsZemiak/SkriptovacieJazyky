<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moja prvá stránka v PHP</title>
</head>
<body>
<h1>Vitajte na mojej prvej stránke v PHP!</h1>
<?php
echo "<h1>Henlo world</h1>";
echo "Dnes je " . date("d.m.Y") . "<br>";
echo "Aktuálny čas je " . date("H:i:s") . "<br>";
?>
</body>
</html>
