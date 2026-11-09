<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 6</title>
</head>
<body>

    <?php

function wzrost($a) {

    if($a < 150) {
        return "Niski wzrost";
    }
    elseif($a > 180) {
        return "Wysoki wzrost";
    }
    else {
        return "Sredni wzrost";
    }
}

$a = (int)readline("Podaj swoj wzrost w cm: ");

echo wzrost($a);

?>

</body>
</html>