<?php
include 'db.php';
$email = $_POST["email"];
$password = $_POST["password"];
$name = $_POST["name"];
$registerDate = intval($_POST["register_date"]);
$results = $c->query("SELECT * FROM users WHERE email='" . $email . "'");
if ($results && $results->num_rows > 0) {
	echo -1;
} else {
	$c->query("INSERT INTO users (email, password, name, register_date) VALUES ('" . $email. "', '" . $password . "', '" . $name . "', " . $registerDate . ")");
	echo 0;
}
