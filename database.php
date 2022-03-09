<?php
    $dsn = 'mysql:host=localhost;dbname=portfolio';
    $username = 'root';
    $password = 'sesame';

    try {
        $db = new PDO($dsn, $username, $password);
        echo '<p>you are connected</p>';
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database_error.php');
        exit();
    }

