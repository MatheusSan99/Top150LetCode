<?php

class Solution
{

    /**
     * @param int[] $nums
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

$nums = [2,1,2,2,2,1,1,3,3];

$solution = new Solution();

echo $solution->majorityElement($nums);