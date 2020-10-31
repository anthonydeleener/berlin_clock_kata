<?php
require_once('BerlinClock.php');
$berlin_clock = new BerlinClock();

$hours = $berlin_clock->init_hours();
$minutes = $berlin_clock->init_minutes();
$seconds = $berlin_clock->init_seconds();

echo $berlin_clock->translate_second($seconds) . "<br>";
echo $berlin_clock->translate_hours($berlin_clock->get_five_hours($hours)) . "<br>";
echo $berlin_clock->translate_hours($berlin_clock->get_hours($hours)) . "<br>";
echo $berlin_clock->translate_minutes($berlin_clock->get_five_minutes($minutes)) . "<br>";
echo $berlin_clock->translate_minutes($berlin_clock->get_minutes($minutes)) . "<br>";