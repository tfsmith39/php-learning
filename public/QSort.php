<?php

function partition(&$arr,$low,$high) {
    $i = ($low - 1);         # index of smaller element
    $pivot = $arr[$high];     # pivot

    for($j=$low; $j<$high; $j++){

        # If current element is smaller than the pivot
        if($arr[$j] <= $pivot) {

            # increment index of smaller element
            $i = $i + 1;
            $temp = $arr[$i];
            $arr[$i] = $arr[$j];
            $arr[$j] = $temp;
        }
    }
    $temp = $arr[$i + 1];
    $arr[$i + 1] = $arr[$high];
    $arr[$high] = $temp;
    return $i+1;
}

# The main function that implements QuickSort
# arr[] --> Array to be sorted,
# low  --> Starting index,
# high  --> Ending index

# Function to do Quick sort
function quickSort(&$arr,$low,$high) {
    if($low < $high) {

        # pi is partitioning index, arr[p] is now
        # at right place
        $pi = partition($arr, $low, $high);

        # Separately sort elements before
        # partition and after partition
        quickSort($arr, $low, $pi - 1);
        quickSort($arr, $pi + 1, $high);
    }
}

$items = ['Jimmy', 9, 'Tim', 8, 'Reese', 7, 'Butts'];
$n = count($items);
quickSort($items, 0, $n - 1);
print_r($items);