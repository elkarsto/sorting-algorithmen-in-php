<?php

// Herausfinden wie lange jede Berechnung der Ausgabe des Arrays gedauert hat.
// Mithilfe von microtime(true)
// 
// microtime(true) returns the unix timestamp plus milliseconds as a float

//$starttime = microtime(true);

/* do stuff here */

//$endtime = microtime(true);
//$timediff = $endtime - $starttime;

/*
	function secondsToTime($s)
{
    $h = floor($s / 3600);
    $s -= $h * 3600;
    $m = floor($s / 60);
    $s -= $m * 60;
    return $h.':'.sprintf('%02d', $m).':'.sprintf('%02d', $s);
}

*/

returned als Stunde:Minute:Sek 



*/


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

for ($i = 0; $i < 1000; $i++) {
    $number[$i] = rand_num();
}
echo "Ausgabe des unsortierten Arrays:";
echo '<pre>';
print_r($number);
echo '</pre>';

function numbers($number) {

    $anz = count($number);
    $temp = '';

    for ($a = 0; $a < $anz; $a++) {

        for ($b = 0; $b < $anz - 1; $b++) {

            if ($number[$b + 1] < $number[$b]) {

                $temp = $number[$b];
                $number[$b] = $number[$b + 1];
                $number[$b + 1] = $temp;
            }
        }
    }
    return $number;
}

echo '<pre>';
$sortiert = numbers($number);
print_r($sortiert);
echo '</pre>';

echo '<pre>';
$sortiert = numbers(array_reverse($sortiert));
print_r($sortiert);
echo '</pre>';

echo '<pre>';
$sortiert = numbers($sortiert);
print_r($sortiert);
echo '</pre>';

echo "Did nothing in $time seconds\n";

?>
    </body>
</html>
