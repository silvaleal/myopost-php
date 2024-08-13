<?php

function registerUser($name, $nickname, $email, $password) {
    $connect = dbConnect();
    $sql = "INSERT INTO usuários (author_name, author_nickname, author_email, author_password) 
            VALUES ('$name', '$nickname', '$email', '$password')";
    $connect->query($sql);
    
}
function getUserByID($id) {
    $connect = dbConnect();
    $sql = "SELECT * FROM usuários WHERE author_id = $id;";
    $result = $connect->query($sql);
    $result = $result->fetch(PDO::FETCH_ASSOC);
    if ($result) return $result;
}

function getUser($identicator) {
    $connect = dbConnect();
    $sql = "SELECT * FROM usuários 
            WHERE author_email = '$identicator' OR author_nickname = '$identicator' OR author_name = '$identicator';";
    $result = $connect->query($sql);
    $result = $result->fetch(PDO::FETCH_ASSOC);
    if ($result) return $result;
}

function getUserLogin($email, $password) {
    $connect = dbConnect();
    $sql = "SELECT * FROM usuários WHERE author_email = '$email' AND author_password = '$password'";
    $result = $connect->query($sql);
    $result = $result->fetch(PDO::FETCH_ASSOC);
    if ($result) return True;
}

function deleteUserByID($id) {
    $connect = dbConnect();
    $sql = "DELETE FROM usuários WHERE author_id = $id;";
    $connect->query($sql);
}