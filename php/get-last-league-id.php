<?php
include 'db.php';
$results = $c->query("SELECT * FROM custom_leagues ORDER BY league_id DESC LIMIT 1");
if ($results && $results->num_rows > 0) {
	$row = $results->fetch_assoc();
	echo intval($row["league_id"])+1;
} else {
	$c->query("ALTER TABLE custom_leagues AUTO_INCREMENT=1000");
	echo 1000;
}
