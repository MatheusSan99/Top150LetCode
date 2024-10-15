<?php

class Solution {
    function twoSum($nums, $target) {
        foreach($nums as $index => $actualNumber) {
            $numberToReachTarget = $target - $actualNumber;

            if (in_array($numberToReachTarget, $nums)) {
                $indexToReachTarget = array_search($numberToReachTarget, $nums);

                if ($index !== $indexToReachTarget) {
                    return [$index, $indexToReachTarget];
                }
            }
        }
    }
}

$nums = [3, 2, 4];
$target = 6;

$Solution = new Solution();

print_r($Solution->twoSum($nums, $target));
