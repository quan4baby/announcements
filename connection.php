<?php

$user = 'root';
 

$password = '';
 

$server = 'localhost';
 

$database = 'announcements';
 

$pdo = new PDO("mysql:host=$server;dbname=$database", $user, $password);


?>