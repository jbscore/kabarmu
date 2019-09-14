<?php
include 'db.php';
$scheduleID = intval($_POST["schedule_id"]);
$team1Score = intval($_POST["team_1_score"]);
$team2Score = intval($_POST["team_2_score"]);
$results = $c->query("SELECT * FROM predictions WHERE schedule_id=" . $scheduleID);
if ($results && $results->num_rows > 0) {
	return;
}
$c->query("INSERT INTO predictions (schedule_id, team_1_score, team_2_score) VALUES (" . $scheduleID . ", " . $team1Score . ", " . $team2Score . ")");
