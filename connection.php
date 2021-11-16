<?php
define('HOST', 'Localhost');
define('USER', 'root');
define('PASS', '');
define('DB', 'gamestore');

$connection = mysqli_connect(HOST, USER, PASS, DB);
header('Content-Type: application/json');