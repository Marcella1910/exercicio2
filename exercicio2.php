<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 2</title>
</head>
<body>
    <?php
        $datetime = new DateTime( "now", new DateTimeZone( "America/Sao_Paulo" ) );
        $hora = $datetime->format( 'H' );

        if ($hora >= 0 && $hora <= 12) {
            echo "<h1>Bom dia</h1>";
            echo "<img src = 'https://www.portalriomaina.com/wp-content/uploads/2022/05/dia-do-sol.jpg' alt = 'Sol'>";
        }   

        elseif ($hora >12 && $hora <18) {
            echo "<h1>Boa tarde</h1>";
            echo "<img src = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSjZvK08pmoaf77qJZpxB3mCKPAf_mXTx0xkA&s' alt = 'Por do Sol'>";
        }

        else {
            echo "<h1>Boa noite</h1>";
            echo "<img src = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTddPAK-SdgrrItm_n_rEf-7AHKaKY-LNxLMQ&s' alt = 'Lua cheia'>";
        }
    ?>
</body>
</html>