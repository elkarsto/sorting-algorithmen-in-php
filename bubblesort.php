<?php
@ini_set('display_errors', true);
error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Bubblesort</title>
    </head>
    <body>
        <h1>Bubblesort Algorithmus in PHP</h1>

        <form>
            <a href="index.php"><button type="button" id="Sortieren">Startseite</button></a><a href="bubblesort_1.php"><button type="button" id="Next">Sortieren</button></a>
        </form><br>

        <?php

        function rand_num() {
            return rand(1, 1000);
        }

        for ($i = 0; $i < 10000; $i++) {
            $number[$i] = rand_num();
        }
        echo "Ausgabe des unsortierten Arrays:";
        echo '<pre>';
        //print_r($number);
        echo '</pre>';

        echo 'Das ist der unsortierte Array gewesen!';

        function numbers($number) {

            $anz = count($number);
            $temp = '';

            for ($a = 0; $a < $anz; $a++) {

                for ($b = 0; $b < $anz - 1 - $a; $b++) {

                    if ($number[$b + 1] < $number[$b]) {

                        $temp = $number[$b];
                        $number[$b] = $number[$b + 1];
                        $number[$b + 1] = $temp;
                    }
                    //echo $a . " " . $b . "<br/>";
                }
            }
            return $number;
        }

        echo '<pre>';
        $start = microtime(true);
        $sortiert = numbers($number);
        //print_r($sortiert);
        $time_elapsed_secs = microtime(true) - $start;
        echo $time_elapsed_secs;
        echo '</pre>';

        echo '<pre>';
        $start = microtime(true);
        $sortiert = numbers(array_reverse($sortiert));
        //print_r($sortiert);
        $time_elapsed_secs = microtime(true) - $start;
        echo $time_elapsed_secs;
        echo '</pre>';

        echo '<pre>';
        $start = microtime(true);
        $sortiert = numbers($sortiert);
        //print_r($sortiert);
        $time_elapsed_secs = microtime(true) - $start;
        echo $time_elapsed_secs;
        echo '</pre>';
        ?>


    </body>
</html>
