<?php

$get = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

if (!$get) header("location:/");
$post = getPostByID($get);
$author = getUserByID($post['author_id']);