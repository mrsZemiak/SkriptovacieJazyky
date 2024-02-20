<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP príklad</title>
</head>
<body>
<h1>PHP príklad</h1>

<?php

// **Premenné**
$meno = "Peter";
$vek = 30;
$zamestnanie = "programátor";
$jeZenaty = True;

// **Podmienka**
if ($vek >= 18) {
    echo "<p>{$meno} je dospelý.</p>";
} else {
    echo "<p>{$meno} je dieťa.</p>";
}

$zvierata = array("Dog", "Cat", "Horse");

// **Numerické pole**
$cisla = array(1, 2, 3, 4, 5);

// **Asociatívne pole**
$osoba = array("meno" => "Peter", "vek" => 30, "zamestnanie" => "programátor");

// **Dvojrozmerné pole**
$mesiace = array(
    array("január", "február", "marec"),
    array("apríl", "máj", "jún"),
    array("júl", "august", "september"),
    array("október", "november", "december"),
);

// **Typy cyklov**

// **Cyklus `for`**
for ($i = 0; $i < count($cisla); $i++) {
    echo "<p>{$cisla[$i]}</p>";
}

// **Cyklus `foreach`**
echo "<ul>";
foreach($zvierata as $item){
    echo "<li>$item</li>";
}
echo "</ul>";

foreach ($osoba as $kluc => $hodnota) {
    echo "<p>{$kluc}: {$hodnota}</p>";
}

// **Cyklus `while`**
$i = 0;
while ($i < count($mesiace)) {
    echo "<p>{$mesiace[$i][0]}</p>";
    $i++;
}

// **Cyklus `do while`**
$i = 0;
do {
    echo "<p>{$mesiace[$i][1]}</p>";
    $i++;
} while ($i < count($mesiace));

?>
</body>
</html>
