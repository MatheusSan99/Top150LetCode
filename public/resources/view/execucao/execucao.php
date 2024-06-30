<?php

class Solution {

    /**
     * @param int[] $nums
     * @param int $k
     * @return NULL
     */
    function rotate(&$nums, $k)
    {
        if ($k == 0) {
            return;
        }

        $k = $k % count($nums);

        $dataRemoved = array_splice($nums, -$k);

        $nums = array_merge($dataRemoved, $nums);
    }
}

$nums = [1,2];

$solution = new Solution();

$solution->rotate($nums, 3);

print_r($nums);
