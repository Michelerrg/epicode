<?php

    require 'connect.php';

    $pdo = connect();

    try {
        $pdo->query("
        INSERT INTO posts (titolo, user_id) VALUES 
        ('{$_POST['titolo']}', '{$_POST['queryUser']}');"
    );    

    } catch(Exception $e) {
        var_dump($e);
    }
