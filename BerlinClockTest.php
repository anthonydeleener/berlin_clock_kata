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

    public function test_five_hours_block() {
        $hour = date("H");
        $actual = $this->berlinClock->get_five_hours($hour);
        $this->assertEquals(floor($hour/5),$actual);
    }

    public function test_hour_block(){
        $hour = date("H");
        $actual = $this->berlinClock->get_hours($hour);
        $this->assertEquals(floor($hour%5),$actual);
    }

    public function test_five_minutes_block(){
        $min = date("m");
        $actual = $this->berlinClock->get_five_minutes($min);
        $this->assertEquals(floor($min/5),$actual);
    }

    public function test_minute_block(){
        $min = date("m");
        $actual = $this->berlinClock->get_minutes($min);
        $this->assertEquals(floor($min%5),$actual);
    }

    public function test_second_block(){
        $second = date('s');
        $actual = $this->berlinClock->get_seconds($second);
        $this->assertEquals($second%2,$actual);
    }
}
