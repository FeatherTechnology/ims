<?php
date_default_timezone_set('Asia/Kolkata');
$timeZoneQry = "SET time_zone = '+5:30' ";
$host = "127.0.0.1";
$db_user = "root";
$db_pass = "";
$dbname = "ims";
$pdo = new PDO("mysql:host=$host; dbname=$dbname", $db_user, $db_pass);
$pdo->exec($timeZoneQry);

