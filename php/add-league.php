<?php
include 'db.php';
$name = $_POST["name"];
$country = $_POST["country"];
$season = intval($_POST["season"]);
$seasonStart = $_POST["season_start"];
$seasonEnd = $_POST["season_end"];
$logo = $_POST["logo"];
$sql = "INSERT INTO custom_leagues (name, type, country, country_code, season, season_start, season_end, logo, flag, standings, is_current) VALUES ('" . $name . "', 'League', '" . $country . "', NULL, " . $season . ", '" . $seasonStart . "', '" . $seasonEnd . "', '" . $logo . "', '', 1, true)";
$c->query($sql);
echo $sql;
