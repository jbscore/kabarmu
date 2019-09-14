<?php
include 'db.php';
$tournamentID = intval($_POST["tournament_id"]);
$results = $c->query("SELECT * FROM comments WHERE tournament_id=" . $tournamentID);
$comments = [];
if ($results && $results->num_rows > 0) {
	while ($row = $results->fetch_assoc()) {
		array_push($comments, $row);
	}
}
echo json_encode($comments);
