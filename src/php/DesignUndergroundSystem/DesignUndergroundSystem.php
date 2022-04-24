<?php

/**
 * Autogenerated file for problem DesignUndergroundSystem
 */

namespace LeetCode\Problems\DesignUndergroundSystem;

class DesignUndergroundSystem
{
    protected $hashMap;
    protected $customerTravel;

    /**
     */
    function __construct() {
        $this->hashMap = [];
        $this->customerTravel = [];
    }
    
    /**
     * @param Integer $id
     * @param String $stationName
     * @param Integer $t
     * @return NULL
     */
    function checkIn($id, $stationName, $t) {
        $this->hashMap[$id][] = [$stationName, $t, 'cin'];
    }
    
    /**
     * @param Integer $id
     * @param String $stationName
     * @param Integer $t
     * @return NULL
     */
    function checkOut($id, $stationName, $t) {
        $lastCin = $this->hashMap[$id][count($this->hashMap[$id]) - 1];
        $this->hashMap[$id][] = [$stationName, $t, 'cout'];
        $statKey = strtolower($lastCin[0]. '-' . $stationName);
        $this->customerTravel[$statKey][] = $t - $lastCin[1];
    }
    
    /**
     * @param String $startStation
     * @param String $endStation
     * @return Float
     */
    function getAverageTime($startStation, $endStation) {
        $statKey = strtolower($startStation.'-'.$endStation);
        $total = array_sum($this->customerTravel[$statKey]);
        return $total/count($this->customerTravel[$statKey]);
    }
}
