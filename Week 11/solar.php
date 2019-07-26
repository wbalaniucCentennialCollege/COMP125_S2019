<?php
$WeatherSource = "https://api.forecast.io/forecast/f566afeb80f3b58eb003630e298e9491/" . $_GET["lat"] . "," . $_GET["lng"];
header("Content-Type: application/json");
header("Cache-Control: no-cache");
readfile($WeatherSource);
?>