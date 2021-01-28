<?php

/* This function takes last element as pivot, places
the pivot element at its correct position in sorted
array, and places all smaller (smaller than pivot)
to left of pivot and all greater elements to right
of pivot */
function partition($arr, $low, $high) {
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
    return $i+1;
}

/* The main function that implements QuickSort
arr[] --> Array to be sorted,
low --> Starting index,
high --> Ending index */
function quickSort($arr, $low, $high) {
    if ($low < $high) {
        /* pi is partitioning index, arr[p] is now
        at right place */
        $pi = partition($arr, $low, $high);

        // Separately sort elements before
        // partition and after partition
        $arr = quickSort($arr, $low, $pi-1);
        $arr = quickSort($arr, $pi+1, $high);
    }
    return $arr;
}

$items = ['Jimmy', 9, 'Tim', 8, 'Reese', 7, 'butts'];
$n = count($items);
quickSort($items, 0, $n - 1);
print_r($items);