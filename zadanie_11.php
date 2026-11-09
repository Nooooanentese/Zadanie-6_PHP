<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 6</title>
</head>
<body>

    <?php

function szyfr($tekst) {

    $wynik = "";

    for($i = 0; $i < strlen($tekst); $i++) {

        $znak = $tekst[$i];

        if($znak >= 'a' && $znak <= 'z') {

            if($znak == 'y') {
                $znak = 'a';
            }
            elseif($znak == 'z') {
                $znak = 'b';
            }
            else {
                $znak = chr(ord($znak) + 2);
            }
        }
        elseif($znak >= 'A' && $znak <= 'Z') {

            if($znak == 'Y') {
                $znak = 'A';
            }
            elseif($znak == 'Z') {
                $znak = 'B';
            }
            else {
                $znak = chr(ord($znak) + 2);
            }
        }

        $wynik = $wynik . $znak;
    }

    return $wynik;
}

$tekst = readline("Podaj tekst do zaszyfrowania: ");

echo "Zaszyfrowany tekst: " . szyfr($tekst);

?>

</body>
</html>