<?php
include 'db.php';
$scheduleID = intval($_POST["schedule_id"]);
$results = $c->query("SELECT * FROM predictions WHERE schedule_id=" . $scheduleID);
if ($results && $results->num_rows > 0) {
	$row = $results->fetch_assoc();
	echo json_encode($row);
}
