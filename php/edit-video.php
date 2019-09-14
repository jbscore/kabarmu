<?php
include 'db.php';
$id = intval($_POST["id"]);
$title = $_POST["title"];
$url = $_POST["url"];
$imgURL = $_POST["img_url"];
$c->query("UPDATE videos SET title='" . $title . "', link='" . $url . "', thumbnail_url='" . $imgURL . "' WHERE id=" . $id);
