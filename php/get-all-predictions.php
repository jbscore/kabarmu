<?php
include 'db.php';
$c->query("SET NAMES 'utf8'");
$results = $c->query("SELECT * FROM predictions");
$predictions = [];
if ($results && $results->num_rows > 0) {
	while ($row = $results->fetch_assoc()) {
		array_push($predictions, $row);
	}
}
echo json_encode($predictions);
