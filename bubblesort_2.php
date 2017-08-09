<?php

$bubblesort_array[]='3';
$bubblesort_array[]='5';
$bubblesort_array[]='2';
$bubblesort_array[]='1';
$bubblesort_array[]='8';
$bubblesort_array[]='6';
$bubblesort_array[]='7';
$bubblesort_array[]='4';

function bubblesort($bubblesort_array = array ()) {
    $anz = count($bubblesort_array);
    $temp='';
    for ($a = 0; $a < $anz; $a++) {
        for ($b = 0; $b < $anz -1; $b++) {
            if ($bubblesort_array[$b +1] < $bubblesort_array[$b]) {
                $temp = $bubblesort_array[$b];
                $bubblesort_array[$b] = $bubblesort_array[$b +1];
                $bubblesort_array[$b +1] = $temp;
            }
        }
    }
    return $bubblesort_array;
}



echo 'Ausgabe des unsortierten Array:';
echo '<pre>';
print_r($bubblesort_array);
echo '</pre>';

echo 'Ausgabe des sortierten Array:';
echo '<pre>';
print_r(bubblesort($bubblesort_array));
echo '</pre>';
?>
