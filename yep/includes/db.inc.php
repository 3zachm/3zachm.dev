<?php

require_once(__DIR__ . '/../../../secure/.env');

$conn = mysqli_connect($_SQLIP, $_SQLUSER, $_SQLPASS, $_SQLNAME);

if (!$conn) {
    die("Connection failed:" . mysqli_connect_error());
}