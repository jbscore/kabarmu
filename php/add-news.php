<?php
include 'db.php';
$title = $_POST["title"];
$description = $_POST["description"];
$img = $_POST["img"];
$date = $_POST["date"];
$c->query("INSERT INTO news (title, description, img, date) VALUES ('" . $title . "', '" . $description . "', '" . $img . "', '" . $date . "')");
