<?php

class Solution {

/**
 * @param int[] $nums
 * @param int $k
 * @return NULL
 */
function rotate(&$nums, $k) {
    while ($k > 0) {
        $lastElement = array_pop($nums);
        array_unshift($nums, $lastElement);
        $k--;
    }
}
}

$nums = [1,2,3,4,5,6,7];

$solution = new Solution();

$solution->rotate($nums, 3);