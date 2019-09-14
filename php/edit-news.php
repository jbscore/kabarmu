<?php
include 'db.php';
$id = intval($_POST["id"]);
$title = $_POST["title"];
$description = $_POST["description"];
$img = $_POST["img"];
$date = $_POST["date"];
$c->query("UPDATE news SET title='" . $title . "', description='" . $description . "', img='" . $img . "', date='" . $date . "' WHERE id=" . $id);
