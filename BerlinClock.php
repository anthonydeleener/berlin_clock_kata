<?php

class BerlinClock {

    public function __construct() {
    }

    public function initHours() {
        return date("H");
    }

    public function initMinutes() {
        return date("i");
    }

    public function initSeconds() {
        return date("s");
    }

    public function translateSecond($seconds) {
        if ($seconds % 2 === 0) {
            return "S";
        }
        return "X";
    }

    public function translateHours($hours) {
        $toreturn = "";
        for($i = $hours; $i>0; $i--) {
            $toreturn .= "H";
        }
        return $toreturn;
    }

    public function translateMinutes($minutes) {
        $toreturn = "";
        for($i = $minutes; $i>0; $i--) {
            $toreturn .= "M";
        }
        return $toreturn;
    }

    public function getFiveHours($hours) {
        $count = 0;
        for($i=0; $i<floor($hours/5); $i++) {
            $count++;
        }
        return $count;
    }

    public function getHours($hours) {
        $count =0;
        for($i=0;$i<floor($hours%5);$i++){
            $count++;
        }
        return $count;
    }

    public function getFiveMinutes($minutes) {
        $count = 0;
        for($i=0;$i<floor($minutes/5);$i++){
            $count++;
        }
        return $count;
    }

    public function getMinutes($minutes) {
        $count = 0;
        for($i=0;$i<floor($minutes%5);$i++){
            $count++;
        }
        return $count;
    }

    public function getSeconds($seconds){
       if($seconds%2===0){
           return 0;
       }
       return 1;
    }
}