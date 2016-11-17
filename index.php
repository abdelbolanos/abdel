<?php

$pdo = new PDO("mysql:host=mysql;dbname=abdel", "root", "secret");

foreach($pdo->query('SELECT * FROM album') as $row) {
    print_r($row);
}




