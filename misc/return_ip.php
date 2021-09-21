<?php

if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $user_ip_address = $_SERVER['HTTP_CLIENT_IP'];
}
elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $user_ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
}
else {
    $user_ip_address = $_SERVER['REMOTE_ADDR'];
}
echo("<div style='display: flex; flex-direction: column; justify-content: center; text-align: center; font-family: arial;'><h2><b>Client IP: " . $user_ip_address . "</b></h2></div>");