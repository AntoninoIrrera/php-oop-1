<?php

    require_once __DIR__ . '/models/Movie.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP</title>
</head>

<body>
    <?php

        $ritornoAlFuturo = new Movie('ritorno al futuro','2:30',['fantasy','comico']);
        $ritornoAlFuturo2 = new Movie('ritorno al futuro 2', '2:15', ['fantasy', 'comico','fantascientifico']);

    ?>
    <pre>
        <?php
            echo "\n";
            echo 'titolo: ' . $ritornoAlFuturo->titolo;
            echo "\n";
            echo 'durata: ' . $ritornoAlFuturo->durata;
            echo "\n";
            echo 'genere: ';
            foreach($ritornoAlFuturo->genere as $element){
                echo $element . " ";
            }
            echo '<br>';
            echo "\n";
            echo 'titolo: ' .  $ritornoAlFuturo2->titolo;
            echo "\n";
            echo 'durata: ' . $ritornoAlFuturo2->durata;
            echo "\n";
            echo 'genere: ';
            foreach ($ritornoAlFuturo2->genere as $element) {
                echo $element . " ";
            }
        ?>
    </pre>

</body>

</html>