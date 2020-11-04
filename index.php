<?php
require_once('BerlinClock.php');
$berlin_clock = new BerlinClock();

$hours = $berlin_clock->initHours();
$minutes = $berlin_clock->initMinutes();
$seconds = $berlin_clock->initSeconds();

echo $berlin_clock->translateSecond($seconds) . "<br>";
echo $berlin_clock->translateHours($berlin_clock->getFiveHours($hours)) . "<br>";
echo $berlin_clock->translateHours($berlin_clock->getHours($hours)) . "<br>";
echo $berlin_clock->translateMinutes($berlin_clock->getFiveMinutes($minutes)) . "<br>";
echo $berlin_clock->translateMinutes($berlin_clock->getMinutes($minutes)) . "<br>";