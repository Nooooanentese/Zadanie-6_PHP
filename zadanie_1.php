<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 6</title>
</head>
<body>

    <?php

function suma($a, $b) {
    $wynik = $a + $b;
    return $wynik;
}

$a = (int)readline("Podaj pierwsza liczbe: ");
$b = (int)readline("Podaj druga liczbe: ");

$wynik = suma($a, $b);

echo "Suma liczb wynosi: " . $wynik;

?>

</body>
</html>