<?php
include 'db.php';
$id = intval($_POST["id"]);
$teamID = intval($_POST["team_id"]);
$results = $c->query("SELECT * FROM players WHERE id=" . $id . " AND team_id=" . $teamID);
if ($results && $results->num_rows > 0) {
	$row = $results->fetch_assoc();
	echo json_encode($row);
}
