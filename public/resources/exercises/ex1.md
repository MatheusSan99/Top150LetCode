# LeetCode Problem: Merge Sorted Array

## Problem Description

You are given two integer arrays `nums1` and `nums2`, sorted in non-decreasing order, and two integers `m` and `n`, representing the number of elements in `nums1` and `nums2` respectively.

Merge `nums1` and `nums2` into a single array sorted in non-decreasing order.

The final sorted array should not be returned by the function, but instead be stored inside the array `nums1`. To accommodate this, `nums1` has a length of `m + n`, where the first `m` elements denote the elements that should be merged, and the last `n` elements are set to 0 and should be ignored. `nums2` has a length of `n`.

### Examples

**Example 1:**

- **Input:** `nums1 = [1,2,3,0,0,0], m = 3, nums2 = [2,5,6], n = 3`
- **Output:** `[1,2,2,3,5,6]`
- **Explanation:** 
  - The arrays we are merging are `[1,2,3]` and `[2,5,6]`.
  - The result of the merge is `[1,2,2,3,5,6]`.

**Example 2:**

- **Input:** `nums1 = [1], m = 1, nums2 = [], n = 0`
- **Output:** `[1]`
- **Explanation:** 
  - The arrays we are merging are `[1]` and `[]`.
  - The result of the merge is `[1]`.

**Example 3:**

- **Input:** `nums1 = [0], m = 0, nums2 = [1], n = 1`
- **Output:** `[1]`
- **Explanation:** 
  - The arrays we are merging are `[]` and `[1]`.
  - The result of the merge is `[1]`.

**Constraints:**

- `nums1.length == m + n`
- `nums2.length == n`
- `0 <= m, n <= 200`
- `1 <= m + n <= 200`
- `-10^9 <= nums1[i], nums2[j] <= 10^9`

## Resolution in PHP

```php
<?php 

class Solution {

    /**
     * @param int[] $nums1
     * @param int $m
     * @param int[] $nums2
     * @param int $n
     * @return NULL
     */
    function merge(&$nums1, $m, $nums2, $n) {
        $arrExample = $nums1;
        
        $nums1 = [];
        
        $this->mergeArr($m, $arrExample, $nums1);
        
        $this->mergeArr($n, $nums2, $nums1);
        
        asort($nums1);
    }
    
    function mergeArr(int $desiredLength, array $desiredMerge, array &$finalArr) : void  {
        for($i = 0; $i < $desiredLength; $i++) {
            $finalArr[] = $desiredMerge[$i];
        } 
    }

    function test() {
        $nums1 = [1,2,3,0,0,0];
        $m = 3;
        $nums2 = [2,5,6];
        $n = 3;
        $this->merge($nums1, $m, $nums2, $n);
        var_dump($nums1);
    }
}
