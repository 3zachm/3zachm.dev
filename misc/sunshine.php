<?php
    $hour = date('h');
    $minute = date('i');
    $ampm = date('a');
    $var = "cannot";
    if ($ampm === "am") {
        if ($hour > 5 && $hour < 12) {    // if greater than 5, and less than 12
            $var = "can";
        }
    }
    else {
        if ($hour < 6 || $hour > 11) {   // if less than 6 or greater than 11
            $var = "can";
        }
    }
    echo("it is $hour:$minute $ampm, I $var, in fact, feel the sunshine");
?>