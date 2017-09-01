<!DOCTYPE html>
<html>
    <head>
        <?php
        @ini_set('display_errors', true);
        error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT);
        ?>       

        <title>Quicksort</title>

    </head>
    <body>
        <h1>Quicksort Algorithmus in PHP</h1>

        <form>
            <a href="index.php"><button type="button" id="Sortieren">Startseite</button></a><br>

            <?php

            function rand_num() {
                return rand(10, 99);
            }

            for ($i = 0; $i < 10; $i++) {
                $array[$i] = rand_num();
            }

            echo "Ausgabe des unsortierten Arrays:";
            echo '<pre>';
            print_r($array);
            echo '</pre>';


            echo implode(" - ", $array) . "<br/>\n";

            /*
             * Linke und rechte Grenze im Array festelegen.
             * 
             *
             * function quicksort($links, $rechts) {
             *
             * rechter zeiger = $rechts;
             * linker zeiger = $links;
             *
             *
             * Pivot Element festlegen zum Beispiel Element an der linken Grenze.
             *
             * while(solange linker zeiger kleiner als rechter zeiger){
             *
             *     While ( Pivot <= Rechter Zeiger) {
             *     wird der rechte Zeiger um 1 verringert
             *     } 
             *     Tausche linken Zeiger mit rechten Zeiger (dreieckstausch)
             *     While ( Linker Zeiger <= Pivot) {
             *     Wird der linke Zeiger um 1 erhöht
             *     }
             *     Tausche linken Zeiger mit rechten Zeiger
             *     }
             *  quicksort(linker zeiger, $rechts)
             *  quicksort($links, linker zeiger)
             * }
             * 
             */



            
            $boarderleft = 0;
            $boarderright = count($array) - 1;

            function quicksort($borderleft, $borderright) {
                $tmp = '';
                $pLeft = $borderleft;
                $pRight = $borderright;
                $pivot = $borderleft;
                
                
                echo implode(" - ", $borderleft) . "<br/>\n";
                //die();
                while ($pLeft < $pRight) {
                //die();    
                    while ($pivot < $pRight) {
                        $pRight--;
                    }
                       
                    $tmp = $pLeft;
                    $pLeft = $pRight;
                    $pRight = $tmp;
                    //print_r();
                    //die();
                    
                    while ($pLeft < $pivot) {
                        $pLeft++;
                    }

                    $tmp = $pLeft;
                    $pLeft = $pRight;
                    $pRight = $tmp;
                }
                quicksort($pLeft, $borderright);
                quicksort($borderleft, $pRight);
            }
            
            echo '<pre>';
            //$start = microtime(true);
            $sortiert = quicksort($array);
            print_r($sortiert);
            //$time_elapsed_secs = microtime(true) - $start;
            //echo $time_elapsed_secs;
            echo '</pre>';

            /*
              echo '<pre>';
              $start = microtime(true);
              quicksort(array_reverse($array));
              //print_r($sortiert);
              $time_elapsed_secs = microtime(true) - $start;
              //echo $time_elapsed_secs;
              echo '</pre>';

              echo '<pre>';
              $start = microtime(true);
              quicksort($array);
              //print_r($sortiert);
              $time_elapsed_secs = microtime(true) - $start;
              //echo $time_elapsed_secs;
              echo '</pre>';
             */
            ?>
            </body>
            </html>
