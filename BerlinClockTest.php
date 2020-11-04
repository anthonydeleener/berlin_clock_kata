<?php

require "BerlinClock.php";
use PHPUnit\Framework\TestCase;

class BerlinClockTest extends TestCase
{
      private $berlinClock;

    protected function setUp() : void {
        parent::setUp();
        $this->berlinClock = new BerlinClock();
    }

    public function testFiveHoursBlock() {
        $hour = date("H");

        $actual = $this->berlinClock->getFiveHours($hour);

        $this->assertEquals(floor($hour/5),$actual);
    }

    public function testHourBlock(){
        $hour = date("H");

        $actual = $this->berlinClock->getHours($hour);

        $this->assertEquals(floor($hour%5),$actual);
    }

    public function testFiveMinutesBlock(){
        $min = date("m");

        $actual = $this->berlinClock->getFiveMinutes($min);

        $this->assertEquals(floor($min/5),$actual);
    }

    public function testMinuteBlock(){
        $min = date("m");

        $actual = $this->berlinClock->getMinutes($min);

        $this->assertEquals(floor($min%5),$actual);
    }

    public function testSecondBlock(){
        $second = date('s');

        $actual = $this->berlinClock->getSeconds($second);

        $this->assertEquals($second%2,$actual);
    }
}
