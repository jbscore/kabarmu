<?php
include 'db.php';
$c->query("SET NAMES 'utf8'");
$day = intval($_POST["day"]);
$month = intval($_POST["month"]);
$year = intval($_POST["year"]);
$c->query("SET NAMES 'utf8'");
$results = $c->query("SELECT * FROM schedules WHERE DAY(date)=" . $day . " AND MONTH(date)=" . $month . " AND YEAR(date)=" . $year . "");
$predictions = [];
if ($results && $results->num_rows > 0) {
	while ($row = $results->fetch_assoc()) {
		$scheduleID = $row["id"];
		$results2 = $c->query("SELECT * FROM predictions WHERE schedule_id=" . $scheduleID);
		if ($results2 && $results2->num_rows > 0) {
			$row2 = $results2->fetch_assoc();
			array_push($predictions, $row2);
		}
	}
}
echo json_encode($predictions);
