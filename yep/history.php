<?php
    require_once('includes/data.php');
    require_once(__DIR__ . '/includes/db.inc.php');
    $history = getHistory($conn);
    echo($history);
?>
