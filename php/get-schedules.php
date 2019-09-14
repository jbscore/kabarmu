<?php
include 'db.php';
$c->query("SET NAMES 'utf8'");
$results = $c->query("SELECT * FROM schedules");
$schedules = [];
if ($results && $results->num_rows > 0) {
	while ($row = $results->fetch_assoc()) {
		array_push($schedules, $row);
	}
}
echo json_encode($schedules);
