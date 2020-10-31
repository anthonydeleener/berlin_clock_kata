<?php

require "vendor/autoload.php";
require "BerlinClock.php";

use PHPUnit\Framework\TestCase;

class BerlinClockTest extends TestCase {

    private $berlinClock;

    protected function setUp() : void {
        parent::setUp();
        $this->berlinClock = new BerlinClock();
    }

    public function test_five_hours_blocks() {
        $actual = $this->berlinClock->get_five_hours(date("h"));
        $this->assertEquals(3,$actual);
    }

}

