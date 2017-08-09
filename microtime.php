<?php

/**
 * Einfache Funktion zum Replizieren des PHP 5-Verhaltens
 * Dient zur Messung der Zeit der Dauer eines PHP scripts. 
 * Soll in allen Programmen (Sortierverfahren mit eingebaut werden.)
 */
function microtime_float()
{
    list($usec, $sec) = explode(" ", microtime());
    return ((float)$usec + (float)$sec);
}

$time_start = microtime_float();

// Die Skriptverarbeitung fuer einen bestimmten Zeitraum unterbrechen
usleep(100);

$time_end = microtime_float();
$time = $time_end - $time_start;

echo "In $time Sekunden nichts getan\n";
?>
