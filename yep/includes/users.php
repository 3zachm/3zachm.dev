<?php

function getSum($conn, $column) {
    $result = mysqli_query($conn, 'SELECT SUM(' . $column . ') AS value_sum FROM users');
    $row = mysqli_fetch_assoc($result);
    $sum = $row['value_sum'];
    return $sum;
}

function getUserCount($conn) {
    $result = mysqli_query($conn, 'SELECT COUNT(*) AS value_sum FROM users');
    $row = mysqli_fetch_assoc($result);
    $sum = $row['value_sum'];
    return $sum;
}