<?php

for($i = 0; $i<100; $i++){
    if($i%2 == 0 && $i%3 == 0){
        echo "Fizzbuzz\n";
    }
    elseif($i%3 == 0){
        echo "Buzz\n";
    }
    elseif($i%2 == 0){
        echo "Fizz\n";
    }
    else{
        echo $i."\n";
    }
}
