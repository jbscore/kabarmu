<?php
include 'db.php';
$id = intval($_POST["id"]);
$results = $c->query("SELECT * FROM league_names WHERE league_id=" . $id);
if ($results && $results->num_rows > 0) {
	$row = $results->fetch_assoc();
	echo json_encode($row);
} else {
	echo -1;
}
