<?php
include 'db.php';
$day = intval($_POST["day"]);
$month = intval($_POST["month"]);
$year = intval($_POST["year"]);
$c->query("SET NAMES 'utf8'");
$results = $c->query("SELECT * FROM schedules WHERE DAY(date)=" . $day . " AND MONTH(date)=" . $month . " AND YEAR(date)=" . $year . "");
$schedules = [];
if ($results && $results->num_rows > 0) {
	while ($row = $results->fetch_assoc()) {
		array_push($schedules, $row);
	}
}
echo json_encode($schedules);
