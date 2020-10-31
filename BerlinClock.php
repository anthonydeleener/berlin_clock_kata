<?php

class BerlinClock {

    public function __construct() {
    }

    public function init_hours() {
        return date("H");
    }

    public function init_minutes() {
        return date("i");
    }

    public function init_seconds() {
        return date("s");
    }

    public function translate_second($seconds) {
        if ($seconds % 2 === 0) {
            return "S";
        }
        return "X";
    }

    public function translate_hours($hours) {
        $toreturn = "";
        for($i = $hours; $i>0; $i--) {
            $toreturn .= "H";
        }
        return $toreturn;
    }

    public function translate_minutes($minutes) {
        $toreturn = "";
        for($i = $minutes; $i>0; $i--) {
            $toreturn .= "M";
        }
        return $toreturn;
    }

    public function get_five_hours($hours) {
        $count = 0;
        for($i=0; $i<floor($hours/5); $i++) {
            $count++;
        }
        return $count;
    }

    public function get_hours($hours) {
        $count =0;
        for($i=0;$i<floor($hours%5);$i++){
            $count++;
        }
        return $count;
    }

    public function get_five_minutes($minutes) {
        $count = 0;
        for($i=0;$i<floor($minutes/5);$i++){
            $count++;
        }
        return $count;
    }

    public function get_minutes($minutes) {
        $count = 0;
        for($i=0;$i<floor($minutes%5);$i++){
            $count++;
        }
        return $count;
    }

    public function get_seconds($seconds){
       if($seconds%2===0){
           return 0;
       }
       return 1;
    }
}