<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 6</title>
</head>
<body>

    <?php

function przestepny($rok) {

    if(($rok % 4 == 0 && $rok % 100 != 0) || $rok % 400 == 0) {
        echo "Rok jest przestepny.";
    }
    else {
        echo "Rok nie jest przestepny.";
    }
}

$rok = (int)readline("Podaj rok: ");

przestepny($rok);

?>

</body>
</html>