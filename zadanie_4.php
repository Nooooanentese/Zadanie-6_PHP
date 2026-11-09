<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 6</title>
</head>
<body>

    <?php

function maks($a, $b, $c) {

    $najwieksza = $a;

    if($b > $najwieksza) {
        $najwieksza = $b;
    }

    if($c > $najwieksza) {
        $najwieksza = $c;
    }

    return $najwieksza;
}

$a = (int)readline("Podaj pierwsza liczbe: ");
$b = (int)readline("Podaj druga liczbe: ");
$c = (int)readline("Podaj trzecia liczbe: ");

echo "Najwieksza liczba wynosi: " . maks($a, $b, $c);

?>

</body>
</html>