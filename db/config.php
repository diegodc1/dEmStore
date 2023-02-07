<?php
$db_name = 'dmstore';
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';

try {
  $pdo = new PDO("mysql:dbname=" . $db_name . ";host=" . $db_host, $db_user, $db_pass);
} catch (PDOException $e) {
  print $e->getMessage();
}
