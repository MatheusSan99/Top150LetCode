<?php

class Solution {

  /**
   * @param Integer[] $nums
   * @return Boolean
   */
  function check($nums) {
      $arrayLength = count($nums);
      $sortedArr = $nums;
      sort($sortedArr);

      for ($arrayLength; $arrayLength > 0; $arrayLength--) {
          if ($sortedArr == $nums) {
              return true;
          }
          $firstElement = array_shift($nums);
          array_push($nums, $firstElement);
      }

      return false;
  }
}

$solution = new Solution();

$nums = [3,4,5,1,2];