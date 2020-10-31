<?php
require_once('BerlinClock.php');
$berlin_clock = new BerlinClock();

$hours = $berlin_clock->init_hours();
$minutes = $berlin_clock->init_minutes();
$seconds = $berlin_clock->init_seconds();

echo $berlin_clock->get_seconds($seconds);
echo $berlin_clock->init_hours()+\n;
echo $berlin_clock->init_minutes()+\n;
