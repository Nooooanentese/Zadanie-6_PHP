<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 6</title>
</head>
<body>

    <?php

function starszy($data1, $data2) {

    if($data1 < $data2) {
        echo "Pierwsza osoba jest starsza.";
    }
    elseif($data1 > $data2) {
        echo "Druga osoba jest starsza.";
    }
    else {
        echo "Obie osoby sa w tym samym wieku.";
    }
}

$data1 = readline("Podaj date urodzenia pierwszej osoby (RRRR-MM-DD): ");
$data2 = readline("Podaj date urodzenia drugiej osoby (RRRR-MM-DD): ");

starszy($data1, $data2);

?>

</body>
</html>