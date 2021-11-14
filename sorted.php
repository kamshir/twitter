<?php
include_once "includes/functions.php";
$posts = get_posts(0, true);
$title = 'Сначал старые посты';
$error = get_error_message();
include_once "includes/header.php";
if (logged_in()) include_once "includes/twitter_form.php";
include_once "includes/posts.php";
include_once "includes/footer.php";
