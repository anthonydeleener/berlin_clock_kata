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
}
