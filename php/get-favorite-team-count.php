<?php
include 'db.php';
$userID = intval($_POST["user_id"]);
$results = $c->query("SELECT * FROM favorite_teams WHERE user_id=" . $userID);
echo $results->num_rows;
