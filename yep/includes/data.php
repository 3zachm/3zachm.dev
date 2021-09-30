<?php

function getHistory($conn) {
    $result = mysqli_query($conn, 'SELECT * FROM history ORDER BY time asc');
    $rows = array();
    while($r = mysqli_fetch_assoc($result)) {
        $rows[] = $r;
    }
    return json_encode($rows);
}
