<?php
include 'db.php';
$userID = intval($_POST["user_id"]);
$results = $c->query("SELECT * FROM favorite_players WHERE user_id=" . $userID);
echo $results->num_rows;
