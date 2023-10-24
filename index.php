<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <tittle>Segitiga Siku-siku Dengan Huruf dan Kotak</title>
</head>
<body>
    <div class="container">
        <h1>Segitiga Siku-siku Dengan Huruf dan Kotak</h1>
        <div class="triangle">
            <?php
            $tinggisegitiga = 3;

            for ($i = 1; $i <= $tinggisegitiga; $i++) {
                $kodeAscii = 65;


                for ($j = 1; $j <= $i; $j++) {
                    $huruf = chr($kodeAscii);

                    echo "<div class='box'>$huruf</div>";

                    $kodeAscii++;
                }
           
                echo "<br>";

            }
            ?>
        </div>
     </div>
 </body>
 </html>