<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 6</title>
</head>
<body>

    <?php

function bmi($wzrost, $waga) {

    $wzrost = $wzrost / 100;

    $wynik = $waga / ($wzrost * $wzrost);

    echo "BMI wynosi: " . round($wynik, 2) . "<br>";

    if($wynik < 18.5) {
        echo "Za malo!";
    }
    elseif($wynik > 25) {
        echo "Za duzo!";
    }
    else {
        echo "OK!";
    }
}

$wzrost = (float)readline("Podaj wzrost w cm: ");
$waga = (float)readline("Podaj wage w kg: ");

bmi($wzrost, $waga);

?>

</body>
</html>