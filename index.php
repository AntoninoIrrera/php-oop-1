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
    <link rel="stylesheet" href="./style/style.css">
</head>

<body>
    <?php

    $ritornoAlFuturo = new Movie('ritorno al futuro', 150, ['fantasy', 'comico']);
    $ritornoAlFuturo2 = new Movie('ritorno al futuro 2', 110, ['fantasy', 'comico', 'fantascientifico']);

    ?>
    <main>
        <h2>Film:</h2>
        <div>
            <?php
            echo "<ul>";
            echo '<li> <span>titolo:</span> ' . $ritornoAlFuturo->titolo . '</li>';
            echo '<li> <span>durata:</span> ' . $ritornoAlFuturo->durata . " minuti" . ", " . $ritornoAlFuturo->durata() . '</li>';
            echo '<li> <span>genere:</span> ';
            foreach ($ritornoAlFuturo->genere as $element) {
                echo $element . " ";
            }
            echo '</li>';
            echo '</ul>';
            ?>
        </div>
        <div>
            <?php
            echo "<ul>";
            echo '<li> <span>titolo:</span> ' .  $ritornoAlFuturo2->titolo . '</li>';
            echo '<li> <span>durata:</span> ' . $ritornoAlFuturo2->durata . " minuti" . ", " . $ritornoAlFuturo2->durata() . '</li>';
            echo '<li> <span>genere:</span> ';
            foreach ($ritornoAlFuturo2->genere as $element) {
                echo $element . " ";
            }
            echo '</li>';
            echo '</ul>';
            ?>
        </div>
    </main>

</body>

</html>