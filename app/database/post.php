<?php

function registerPost($title, $desc, $thumbnailID, $thumbnailEXTENSION, $author_id) {
    $connect = dbConnect();
    if ($thumbnailID) { // Juro que tentei melhorar isso aqui kaksa (não usar else)
        $sql = "INSERT INTO postagens (post_title, post_desc, thumbnail_id, thumbnail_extension, author_id) 
            VALUES ('$title', '$desc', '$thumbnailID', '$thumbnailEXTENSION', '$author_id')";
    } else {
        $sql = "INSERT INTO postagens (post_title, post_desc, thumbnail_id, thumbnail_extension, author_id) 
            VALUES ('$title', '$desc', NULL, NULL, '$author_id')";
    }
    $connect->query($sql);
}

function deletePostByID($id) {
    $connect = dbConnect();
    $sql = "DELETE FROM postagens WHERE post_id = $id;";
    $connect->query($sql);
}

function addPostLike($id) {
    $connect = dbConnect();
    $sql = "UPDATE postagens SET post_likes = post_likes +1 WHERE post_id = $id;";
    $connect->query($sql);
}

function getPostByID($id) {
    $connect = dbConnect();
    $sql = "SELECT * FROM postagens WHERE post_id = $id;";
    $result = $connect->query($sql);
    $result = $result->fetch(PDO::FETCH_ASSOC);
    if ($result) return $result;
}

function getPostsRecents() {
    $connect = dbConnect();
    $sql = "SELECT * FROM postagens ORDER BY post_date DESC;";
    $result = $connect->query($sql);
    $result = $result->fetchAll();
    return $result;
}

function getPostsFamuos() {
    $connect = dbConnect();
    $sql = "SELECT * FROM postagens ORDER BY post_likes DESC;";
    $result = $connect->query($sql);
    $result = $result->fetchAll();
    return $result;
}

function getPostByUser($userID) {
    $connect = dbConnect();
    $sql = "SELECT * FROM postagens WHERE author_id = $userID ORDER BY post_date DESC;";
    $result = $connect->query($sql);
    $result = $result->fetchAll();
    return $result;
}

function getPostLastUser($userID) {
    $connect = dbConnect();
    $sql = "SELECT * FROM postagens WHERE author_id = $userID ORDER BY post_date DESC;";
    $result = $connect->query($sql);
    $result = $result->fetch(PDO::FETCH_ASSOC);
    return $result;
}