<?php
include 'db.php';
$userID = intval($_POST["user_id"]);
$results = $c->query("SELECT * FROM comments WHERE user_id=" . $userID);
$comments = [];
if ($results && $results->num_rows > 0) {
	while ($row = $results->fetch_assoc()) {
		array_push($comments, $row);
	}
}
echo json_encode($comments);
