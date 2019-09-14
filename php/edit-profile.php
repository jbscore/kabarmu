<?php
include 'db.php';
$userID = intval($_POST["user_id"]);
$name = $_POST["name"];
$profilePictureName = $_POST["profile_picture"];
$c->query("UPDATE users SET name='" . $name . "', profile_picture='" . $profilePictureName . "' WHERE id=" . $userID);
