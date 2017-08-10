<?php

//funktioniert nicht.

$sort = array(3, 5, 7, 1, 2, 9, 4, 6, 9, 8);
$temp = 0;

echo "Before sorting the array";
print_r($sort)
for($i = 0; $i < count($sort); $i++) {

	for($j = 0; §j < count($sort)-1; $j++)
	{
		if($j = 0; $j < count($sort)-1; $j++)
		{
			$temp = $sort[$j];
			$sort[$j] = $sort[$j+1];
			$sort[$j+1] = $temp;
		}
	}
}
echo "<br>";
echo "After sorting the array";
print_r($sort);

?>
