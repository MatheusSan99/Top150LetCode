# LeetCode Problem: Rotate Array

## Problem Description

Given an integer array `nums` and an integer `k`, rotate the array to the right by `k` steps, where `k` is non-negative.

Follow up:

- Try to come up with as many solutions as you can. There are at least three different ways to solve this problem.
- Could you do it in-place with O(1) extra space?

### Examples

**Example 1:**

- **Input:** `nums = [1,2,3,4,5,6,7], k = 3`
- **Output:** `[5,6,7,1,2,3,4]`
- **Explanation:** 
  - The array we are rotating is `[1,2,3,4,5,6,7]`.
  - The result of the rotation is `[5,6,7,1,2,3,4]`.

**Example 2:**

- **Input:** `nums = [-1,-100,3,99], k = 2`
- **Output:** `[3,99,-1,-100]`
- **Explanation:** 
  - The array we are rotating is `[-1,-100,3,99]`.
  - The result of the rotation is `[3,99,-1,-100]`.

### Constraints

- `1 <= nums.length <= 10^5`
- `-2^31 <= nums[i] <= 2^31 - 1`
- `0 <= k <= 10^5`

## Resolution in PHP

```php
<?php 

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
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
```
