<?php

// In this merge function, it calls count on right instead of $right. 
// PHP assumes this is a string constant (at least in 5.3.9) 
// and when casted into an array that always has one element. 
// So count(right) is always one, 
// and it never exit the first merge.

$array = array(8,1,2,5,6,7);
print_array($array);
merge_sort($array);
print_array($array);

function merge_sort(&$list){
    if( count($list) <= 1 ){
        return $list;
    }

    $left =  array();
    $right = array();

    $middle = (int) ( count($list)/2 );

    // Make left
    for( $i=0; $i < $middle; $i++ ){
        $left[] = $list[$i];
    }

    // Make right
    for( $i = $middle; $i < count($list); $i++ ){
        $right[] = $list[$i];
    }

    // Merge sort left & right
    merge_sort($left);
    merge_sort($right);

    // Merge left & right
    return merge($left, $right);
}

function merge(&$left, &$right){
    $result = array();

    while(count($left) > 0 || count(right) > 0){
        if(count($left) > 0 && count(right) > 0){
            if($left[0] <= $right[0]){
                $result[] = array_shift($left);
            } else {
                $result[] = array_shift($right);
            }
        } elseif (count($left) > 0){
            $result[] = array_shift($left);
        } elseif (count($right) > 0){
            $result[] = array_shift($right);
        }
    }

    print_array($result);exit;

    return $result;
}

function print_array($array){
    echo "<pre>";
    print_r($array);
    echo "<br/>";
    echo "</pre>";
}

?>

//Das ist die effektivere Variante!---------------------------------------------------------------------------------------------

<?php
@ini_set('display_errors', true);
error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Mergesort</title>
    </head>
    <body>
        <h1>Mergesort Algorithmus in PHP</h1>

        <form>
            <a href="index.php"><button type="button" id="Sortieren">Startseite</button></a>
        </form><br>

        <?php

        function rand_num() {
            return rand(1, 1000);
        }

        for ($i = 0; $i < 1000000; $i++) {
            $number[$i] = rand_num();
        }
        //echo "Ausgabe des unsortierten Arrays:";
        echo '<pre>';
        //print_r($number);
        echo '</pre>';        

        function MergeSort($array) {
            //echo "-------------------------------";
            //print_r($array);

            $anz = count($array);
            if ($anz <= 1){ 
                return $array;
            }
           
            $hälfte = round($anz / 2);
            $links = array_splice($array, 0, $hälfte);            
            $rechts = $array;
            //print_r($links);
            //print_r($rechts);
            $sortedlinks = MergeSort($links);
            $sortedrechts = MergeSort($rechts);

            // Merge
            $array = [];
            do {
                if ($sortedlinks[0] <= $sortedrechts[0]){
                    $array[] = array_shift($sortedlinks);
                } else {
                    $array[] = array_shift($sortedrechts);
                }
                
            } while (count($sortedlinks) > 0 && count($sortedrechts) > 0);
            
            $array = array_merge($array, $sortedlinks, $sortedrechts);
            //print_r($array);
            return $array;
        }
                 
           
            
            
            
        
        echo '<pre>';
        $start = microtime(true);
        sort($number);
        //print_r($sortiert);
        $time_elapsed_secs = microtime(true) - $start;
        echo $time_elapsed_secs;
        echo '</pre>';

        echo '<pre>';
        $start = microtime(true);
        sort(array_reverse($number));
        //print_r($sortiert);
        $time_elapsed_secs = microtime(true) - $start;
        echo $time_elapsed_secs;
        echo '</pre>';

        echo '<pre>';
        $start = microtime(true);
        sort($number);
        //print_r($sortiert);
        $time_elapsed_secs = microtime(true) - $start;
        echo $time_elapsed_secs;
        echo '</pre>';
        ?>


    </body>
</html>
?>
