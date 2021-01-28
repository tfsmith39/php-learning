<?php

/* The main function that implements QuickSort
arr[] --> Array to be sorted,
low --> Starting index,
high --> Ending index */
function quickSort($arr, $low, $high) {
    if ($low < $high) {
        /* pi is partitioning index, arr[p] is now
        at right place */
        $pivot = $arr[$high]; // pivot
        $i = $low-1; // Index of smaller element

        for ($j = $low; $j < $high; $j++) {
            // If current element is smaller than the pivot
            if ($arr[$j] < $pivot) {
                $i++; // increment index of smaller element
                $temp = $arr[$i];
                $arr[$i] = $arr[$j];
                $arr[$j] = $temp;
            }
        }
        $temp = $arr[$i+1];
        $arr[$i+1] = $arr[$high];
        $arr[$high] = $temp;
        $pi = $i + 1;

        // Separately sort elements before
        // partition and after partition
        $arr = quickSort($arr, $low, $pi-1);
        $arr = quickSort($arr, $pi+1, $high);
    }
    return $arr;
}

$items = ['Jimmy', 9, 'Tim', 8, 'Reese', 7, 'butts'];
$n = count($items);
$items = quickSort($items, 0, $n - 1);
print_r($items);