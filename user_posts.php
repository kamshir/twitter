<?php
include_once "includes/functions.php";

if (isset($_SESSION['user']['id'])) {
  $id = $_SESSION['user']['id'];
} else if (isset($_GET['id']) && !empty($_GET['id'])) {
  $id = $_GET['id'];
} else {
  $id = 0;
}

$posts = get_posts($id);

$title = "Твиты пользователя";
if (!empty($posts)) $title .= ' @' . $posts[0]['login'];

include_once "includes/header.php";
if (logged_in()) include_once "includes/twitter_form.php";
include_once "includes/posts.php";
include_once "includes/footer.php";
