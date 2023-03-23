<?php
// NARCISSISTIC NUMBER
function narcissistic(int $number): bool
{
    $numArray   = str_split($number);
    $arrLenght = count($numArray);
    $jumlah = 0;

    foreach ($numArray as $n) {
        $jumlah += pow((int)$n, $arrLenght);
    }

    return $jumlah == $number;
}

// PARITY OUTLIER
function parityOutlier($array)
{
    $odds = [];
    $evens = [];
    foreach ($array as $item) {
        if ($item % 2) array_push($odds, $item);
        else array_push($evens, $item);
    }
    return count($evens) === 1 ? $evens[0] : (count($odds) === 1 ? $odds[0] : false);
}

// NEEDLE IN THE HAYSTACK
function findNeedle($array, $search)
{
	$index=null;
	for($i=0;$i<count($array);$i++){
    	if($array[$i] == $search){
        	if($index == null){
            	$index = $i;
            }
        }
    }
    return $index;
}

// THE BLUE OCEAN REVERSE
function blueOcean($array, $value)
{
    if (gettype($value) != 'array' || gettype($array) != 'array') {
        return false;
    }
    $array = array_diff($array,$value);
    $array = array_values($array);
    return $array;
}
