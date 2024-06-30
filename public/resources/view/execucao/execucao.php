<?php

class Solution
{

    /**
     * @param array[] $nums
     * @return int
     */
    function removeDuplicates(&$nums)
    {
        $arrCount = array_count_values($nums);

        foreach ($arrCount as $value => $quantity) {
            while ($quantity > 2) {
                $key = array_search($value, $nums);
                unset($nums[$key]);

                $quantity--;

            }
        }
        return count($nums);
    }
}

$nums = [1, 1, 1, 2, 2, 3];

$solution = new Solution();

$solution->removeDuplicates($nums);