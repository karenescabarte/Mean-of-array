<?php

    echo "<h1>Mean of array</h1>";
    echo "<p>Create a program that prints the mean of the values in the array called 'numbers'. Array 'numbers' should have the following values: 13, 143, 88, 65, 120.</p>";
    $numbers = array(13, 143, 88, 65, 120);

    $sum = 0;
    $mean = 0;
    $arrLength = count($numbers);
    for($i = 0; $i < $arrLength ; $i++){
        $sum += $numbers[$i];
    }
    $mean = $sum / $arrLength;
    echo "The mean of 13, 143, 88, 65, 120 is: $mean";
?>
