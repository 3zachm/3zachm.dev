<?php
    require_once('includes/users.php');
    require_once(__DIR__ . '/includes/db.inc.php');
    $sum = getSum($conn, "cock");
    echo($sum);
?>