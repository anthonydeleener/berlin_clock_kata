<?php
require_once('BerlinClock.php');
$berlinClock = new BerlinClock();

$hours = $berlinClock->initHours();
$minutes = $berlinClock->initMinutes();
$seconds = $berlinClock->initSeconds();

echo $berlinClock->translateSecond($seconds) . "<br>";
echo $berlinClock->translateHours($berlinClock->getFiveHours($hours)) . "<br>";
echo $berlinClock->translateHours($berlinClock->getHours($hours)) . "<br>";
echo $berlinClock->translateMinutes($berlinClock->getFiveMinutes($minutes)) . "<br>";
echo $berlinClock->translateMinutes($berlinClock->getMinutes($minutes)) . "<br>";