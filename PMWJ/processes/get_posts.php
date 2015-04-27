<?php
require_once("../classes/news.php");
session_start();

if (isset($_POST['get_posts'])){

	$news = new News();
	$posts=$news->getPosts($_SESSION['id']);
		echo json_encode($posts);
}

