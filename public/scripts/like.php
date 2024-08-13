<?php
require "../../config.php";

if (!getLogged()) header("location:/login");
$get = filter_input(INPUT_GET, 'post_id', FILTER_VALIDATE_INT);
addPostLike($get);
header("location:/post?id={$get}");
