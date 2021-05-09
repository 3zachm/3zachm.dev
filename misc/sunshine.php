<?php
    $hour = date('h');
    $minute = date('i');
    $ampm = date('a');
    $var = "cannot";
    if ($apm === "am") {
        if ($hour > 5) {
            $var = "can";
        }
    }
    else {
        if ($hour < 6) {
            $var = "can";
        }
    }
    echo("it is $hour:$minute $ampm, I $var, in fact, feel the sunshine");
?>