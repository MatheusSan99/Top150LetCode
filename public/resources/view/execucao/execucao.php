<?php

class Solution {
  function isArraySpecial($nums) {
    $length = count($nums);
    if ($length == 1) {
        return true;
    }

    for ($i = 0; $i < $length - 1; $i++) {
        if (($nums[$i] % 2) == ($nums[$i + 1] % 2)) {
            return false;
        }
    }

    return true;
}

}

$solution = new Solution();

var_dump($solution->isArraySpecial([2,1,4])); 