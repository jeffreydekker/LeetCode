<?php

class Solution {

    function pivotIndex($nums) {
        $total = array_sum($nums);
        $leftSum = 0;

        for ($i = 0; $i < sizeof($nums); $i++) {

            if ($total - $leftSum - $nums[$i] === $leftSum) {
                return $i;
            } 
            $leftSum += $nums[$i];
        }

        return -1;
    }
}

$nums = [1, 7, 3, 6, 5, 6];
$test1 = new Solution();
echo $test1->pivotIndex($nums);