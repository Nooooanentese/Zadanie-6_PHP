<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 6</title>
</head>
<body>

    <?php

function roznica($a, $b) {
    return $a - $b;
}

function iloczyn($a, $b) {
    return $a * $b;
}

function iloraz($a, $b) {
    if($b != 0) {
        return $a / $b;
    }
    else {
        return "Nie mozna dzielic przez 0";
    }
}

$a = (int)readline("Podaj pierwsza liczbe: ");
$b = (int)readline("Podaj druga liczbe: ");

echo "Roznica: " . roznica($a, $b);
echo "<br>";

echo "Iloczyn: " . iloczyn($a, $b);
echo "<br>";

echo "Iloraz: " . iloraz($a, $b);

?>

</body>
</html>