<?php

require_once __DIR__ . '/models/Movie.php';

require_once __DIR__ . '/db/db.php';


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

                $movieObgect = [];

                foreach($movieList as $element){

                    $movie = new Movie($element["title"],$element["durata"],$element["genre"],$element["img"]);

                    $movieObgect[] = $movie;

                }
                


        ?>
        <main>
            <h2>Film:</h2>
            
                <?php
                foreach($movieObgect as $element){
                    echo "<ul>";
                        echo "<li>" . "<img src='$element->immagine'" . "</li>"; 
                        echo "<li> <span>titolo: </span>" . $element->titolo . "</li>";
                        echo "<li> <span>durata: </span>" . $element->durata . " minuti" . ", " . $element->durata() . "</li>";
                        echo "<li> <span>genere: </span>";
                        foreach($element->genere as $genere){
                            echo $genere . " ";
                        }
                        echo "</li>";
                    echo "</ul>";
                }
             
                ?>
            
        </main>
        
</body>

</html>