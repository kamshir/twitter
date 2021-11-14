<?php
include_once "includes/functions.php";
$posts = get_posts();
$title = "Главная страница";
include_once "includes/header.php";
if ($_SESSION['user']) {
  include_once "includes/twitter_form.php";
}
include_once "includes/posts.php";
include_once "includes/footer.php";
