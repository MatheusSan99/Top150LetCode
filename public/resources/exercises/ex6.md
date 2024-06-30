# LeetCode Problem: Majority Element

## Problem Description

Given an array of size `n`, find the majority element. The majority element is the element that appears more than `⌊ n/2 ⌋` times.

You may assume that the majority element always exists in the array.

### Examples

**Example 1:**

- **Input:** `nums = [3,2,3]`
- **Output:** `3`

**Example 2:**

- **Input:** `nums = [2,1,2,2,2,1,1,3,3]`
- **Output:** `2`

### Constraints

- `n == nums.length`
- `1 <= n <= 5 * 10^4`
- `-10^9 <= nums[i] <= 10^9`

## Resolution in PHP

```php
<?php
class Solution
{

    /**
     * @param array[] $nums
     * @return int
     */
    function majorityElement($nums)
    {
        // Testei o algoritmo de Boyer-Moore e tive alguns problemas.
        // O exercício principal diz que o número majoritário sempre existirá e que ele sempre será maior que n/2.
        // Porém, considerando o cenário em que quero saber o número que aparece mais vezes em um array,
        // O algoritmo de Boyer-Moore não funcionaria, pois ele só é adequado quando o número majoritário
        // sempre existe e é maior que n/2.
        // Portanto, resolvi implementar um algoritmo mais simples, que encontra o número que mais aparece no array e tambem resolve o problema.

        $majorNumber = 0;
        $arrFormat = [];
        $count = 0;

        foreach ($nums as $num) {
            if (empty($arrFormat[$num])) {
                $arrFormat[$num] = 1;
                if ($count == 0) {
                    $count = 1;
                    $majorNumber = $num;
                }
            } else {
                $arrFormat[$num]++;

                if ($arrFormat[$num] > $count) {
                    $count = $arrFormat[$num];
                    $majorNumber = $num;
                }
            }
        }
        return $majorNumber;
    }
}
```