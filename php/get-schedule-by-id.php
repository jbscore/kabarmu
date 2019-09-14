<?php
include 'db.php';
$c->query("SET NAMES 'utf8'");
$id = intval($_POST["id"]);
$results = $c->query("SELECT * FROM schedules WHERE id=" . $id);
if ($results && $results->num_rows > 0) {
	$row = $results->fetch_assoc();
	echo json_encode($row);
}
