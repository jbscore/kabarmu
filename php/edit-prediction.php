<?php
include 'db.php';
$scheduleID = intval($_POST["schedule_id"]);
$team1Score = intval($_POST["team_1_score"]);
$team2Score = intval($_POST["team_2_score"]);
$c->query("UPDATE predictions SET team_1_score=" . $team1Score . ", team_2_score=" . $team2Score . " WHERE schedule_id=" . $scheduleID);
