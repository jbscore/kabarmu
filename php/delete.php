<?php
include 'db.php';
$id = intval($_POST["id"]);
$name = $_POST["name"];
$c->query("DELETE FROM " . $name . " WHERE id=" . $id);
