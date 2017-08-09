<?php

// Wahrscheinlich die Hilfsliste, zu Hause nochmal damit auseinander setzen.
// Auf englisch = selection sort.

function selectionSort($array)
{
    for ($i=0; $i<count($array); $i++)
    {
        // Position des kleinsten Elements suchen
        $minpos=$i;
        for ($j=$i+1; $j<count($array); $j++)
            if ($array[$j]<$array[$minpos])
                $minpos=$j;
        // Elemente vertauschen
        $tmp=$array[$minpos];
        $array[$minpos]=$array[$i];
        $array[$i]=$tmp;
    }
    return $array;
}

//Zur Kontrolle
print_r(selectionSort(array('F', 'A', 'B', 'E', 'D', 'C', 'H', 'G')));
?>
