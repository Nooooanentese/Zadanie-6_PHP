<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 6</title>
</head>
<body>

    <?php

function sila($haslo) {

    $dlugosc = strlen($haslo);

    $cyfra = false;
    $duza = false;
    $mala = false;
    $specjalny = false;

    for($i = 0; $i < $dlugosc; $i++) {

        if(ctype_digit($haslo[$i])) {
            $cyfra = true;
        }

        if(ctype_upper($haslo[$i])) {
            $duza = true;
        }

        if(ctype_lower($haslo[$i])) {
            $mala = true;
        }

        if(!ctype_alnum($haslo[$i])) {
            $specjalny = true;
        }
    }

    if($dlugosc <= 4 || $cyfra == false || $duza == false || $mala == false || $specjalny == false) {
        echo "Haslo slabe.";
    }
    elseif($dlugosc <= 8) {
        echo "Haslo srednie.";
    }
    else {
        echo "Haslo mocne.";
    }
}

$haslo = readline("Podaj haslo: ");

sila($haslo);

?>

</body>
</html>