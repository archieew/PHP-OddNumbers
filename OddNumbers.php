<!DOCTYPE html>
<html>
<head>
    <!--Name: Custodio, Archie D.
    Section: WD - 201-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>oddNumbers</title>
</head>
<body>
    <?php
    $odd = "";
    $i = 1;

    do {
        if ($i % 2 == 0) {
            // Even number, do nothing
        } else {
            $odd = $odd . " " . $i;
        }
        $i++;
    } while ($i <= 50);

    echo "The Odd numbers are = " . $odd;
    ?>
</body>
</html>
