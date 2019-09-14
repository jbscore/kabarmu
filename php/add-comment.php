<?php
include 'db.php';
$userID = intval($_POST["user_id"]);
$date = intval($_POST["date"]);
$tournamentID = intval($_POST["tournament_id"]);
$comment = $_POST["comment"];
$c->query("INSERT INTO comments (user_id, tournament_id, comment, date) VALUES (" . $userID . ", " . $tournamentID . ", '" . $comment . "', " . $date . ")");
$id = mysqli_insert_id($c);
echo $id;
