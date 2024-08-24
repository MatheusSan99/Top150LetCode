<?php

class Solution {

    /**
     * @param array[] $nums
     * @return bool
     */
    function canJump($nums)
    {
        $furthestReachableIndex = 0;
        $totalPositions = count($nums);

        for ($currentIndex = 0; $currentIndex < $totalPositions; $currentIndex++) {
            if ($currentIndex > $furthestReachableIndex) {
                return false;
            }

            $furthestReachableIndex = max($furthestReachableIndex, $currentIndex + $nums[$currentIndex]);

            if ($furthestReachableIndex >= $totalPositions - 1) {
                return true;
            }
        }

        return false;
    }

}

$nums = [3,2,1,0,4];

$solution = new Solution();

echo $solution->canJump($nums);