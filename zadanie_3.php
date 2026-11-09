<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 6</title>
</head>
<body>

    <?php

function kalkulator($a, $b, $dzialanie) {

    if($dzialanie == "+") {
        return $a + $b;
    }
    elseif($dzialanie == "-") {
        return $a - $b;
    }
    elseif($dzialanie == "*") {
        return $a * $b;
    }
    elseif($dzialanie == "/") {

        if($b != 0) {
            return $a / $b;
        }
        else {
            return "Nie mozna dzielic przez 0";
        }
    }
    else {
        return "Nieprawidlowe dzialanie";
    }
}

$a = (int)readline("Podaj pierwsza liczbe: ");
$b = (int)readline("Podaj druga liczbe: ");

$dzialanie = readline("Podaj dzialanie (+, -, *, /): ");

$wynik = kalkulator($a, $b, $dzialanie);

echo "<div id='wynik'>";
echo "Wynik dzialania: " . $wynik;
echo "</div>";

?>

</body>
</html>