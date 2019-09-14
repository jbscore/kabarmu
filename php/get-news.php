<?php
include 'db.php';
$results = $c->query("SELECT * FROM news");
$news = [];
if ($results && $results->num_rows > 0) {
	while ($row = $results->fetch_assoc()) {
		array_push($news, $row);
	}
}
echo json_encode($news);
