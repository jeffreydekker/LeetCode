<?php

class Solution {

    public $nums = array();

    function runningSum($nums) {
        $runningSum = 0;
        $total = array();
        
        foreach ($nums as $number) {
            $runningSum += $number;
            $total[] = $runningSum;
            var_dump($total);
        }
        
        var_dump($total);
        return $total;
    }
}

$nums = [1,2,3,4];

$runningSum = new Solution;
$runningSum->runningSum($nums);