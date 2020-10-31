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

    public function test_five_hours_blocks() {
        $hour = date("H");
        $actual = $this->berlinClock->get_five_hours($hour);
        $this->assertEquals(floor($hour/5),$actual);
    }

    public function test_hour_blocks(){
        $hour = date("H");
        $actual = $this->berlinClock->get_hours($hour);
        $this->assertEquals(floor($hour%5),$actual);
    }

    public function test_five_minutes_blocks(){
        $min = date("m");
        $actual = $this->berlinClock->get_five_minutes($min);
        $this->assertEquals(floor($min/5),$actual);
    }
}
