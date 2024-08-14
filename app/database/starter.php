<?php

function dbConnect() {
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'myoblog';

    $pdo = new PDO("mysql:host={$host};dbname={$database}", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $pdo;
}

function dbLoad() {
    $connect = dbConnect();
    $querys = [
        "CREATE TABLE IF NOT EXISTS postagens (
            post_id INT PRIMARY KEY AUTO_INCREMENT, 
            post_title VARCHAR(45), 
            post_desc TEXT, 
            post_shortdesc VARCHAR(25), 
            thumbnail_id VARCHAR(25), 
            thumbnail_extension VARCHAR(25), 
            author_id INT,
            post_date DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
            post_likes INT NOT NULL DEFAULT 0
            );",
        "CREATE TABLE IF NOT EXISTS usuários (
            author_id INT PRIMARY KEY AUTO_INCREMENT,
            author_name VARCHAR(100),
            author_nickname VARCHAR(15),
            author_email VARCHAR(45),
            author_password VARCHAR(15)
            );"
    ];

    foreach ($querys as $query) {
        $result = $connect->query($query);
    }
}