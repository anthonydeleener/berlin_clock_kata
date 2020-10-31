<?php

class BerlinClock {

    public function __construct() {
    }

    public function init_hours() {
        return date("h");
    }

    public function init_minutes() {
        return date("i");
    }

    public function init_seconds() {
        return date("s");
    }

    public function get_seconds($seconds) {
        if ($seconds % 2 === 0) {
            return "S";
        }
        return "X";
    }

    public function get_five_hours($hours) {
        $count = 0;
        for($i=0; $i<floor($hours/5); $i++) {
            $count++;
        }
        return $count;
    }

    public function get_hours($hours) {

    }

    public function get_five_minutes($minutes) {

    }

    public function get_minutes($minutes) {

    }



}