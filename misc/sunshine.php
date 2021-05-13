<?php
    $var = date('H') < 18 && date('H') > 5 ? 'can' : 'cannot';
    echo('it is ' . date('h') . ':' . date('i') . date('a') . ', I '. $var . ', in fact, feel the sunshine');
?>