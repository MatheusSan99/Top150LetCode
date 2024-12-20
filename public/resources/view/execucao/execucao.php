<?php

class Solution {

    function candy($ratings) {
        $doces = array_fill(0, count($ratings), 1);

        for ($indiceAtual = 0; $indiceAtual < count($ratings); $indiceAtual++) {
            $proximoIndice = $indiceAtual + 1;
            $ratingComparacao = $ratings[$proximoIndice];
            $ratingAtual = $ratings[$indiceAtual];

            if (isset($ratingComparacao)) {
                if ($ratingComparacao > $ratingAtual) {
                    $doces[$proximoIndice] = $doces[$indiceAtual] + 1;
                }
            }
        }
        
        for ($indiceAtual = array_key_last($ratings); $indiceAtual > 0; $indiceAtual--) {
            $indiceAnterior = $indiceAtual - 1;
            $ratingComparacao = $ratings[$indiceAnterior];
            $ratingAtual = $ratings[$indiceAtual];

            if (isset($ratingComparacao) && $doces[$indiceAnterior] <= $doces[$indiceAtual]) {
                if ($ratingComparacao > $ratingAtual) {
                    $doces[$indiceAnterior] = $doces[$indiceAtual] + 1;
                }
            }
        }
        
        return array_sum($doces);
    }
}

$ratings = [1,2,87,87,87,2,1];

$Solution = new Solution();

print_r($Solution->candy($ratings));
