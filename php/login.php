<?php
include 'db.php';
$email = $_POST["email"];
$password = $_POST["password"];
$results = $c->query("SELECT * FROM users WHERE email='" . $email . "'");
if ($results && $results->num_rows > 0) {
	$row = $results->fetch_assoc();
	if ($row["password"] != $password) {
		echo -1;
		return;
	}
	echo 0;
} else {
	echo -2;
}
