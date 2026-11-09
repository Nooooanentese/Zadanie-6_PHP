<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 6</title>
</head>
<body>

    <?php

function trojkat($a, $b, $c) {

    if($a > 0 && $b > 0 && $c > 0 && $a + $b > $c && $a + $c > $b && $b + $c > $a) {
        echo "Mozna utworzyc trojkat.";
    }
    else {
        echo "Nie mozna utworzyc trojkata.";
    }
}

$a = (int)readline("Podaj pierwszy bok: ");
$b = (int)readline("Podaj drugi bok: ");
$c = (int)readline("Podaj trzeci bok: ");

trojkat($a, $b, $c);

?>

</body>
</html>