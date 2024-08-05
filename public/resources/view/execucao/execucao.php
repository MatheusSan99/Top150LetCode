<?php

class Solution
{

    /**
     * @param array [] $prices
     * @return int
     */
    public function maxProfit($prices)
    {
        if (empty($prices)) {
            return 0;
        }

        $lowestBuyValue = max($prices);
        $sumAllProfit = 0;

        foreach ($prices as $count => $price) {
           
            if ($price < $lowestBuyValue) {
                $lowestBuyValue = $price;
            }

            $currentProfit = $price - $lowestBuyValue;
          
            if ($currentProfit > 0) {
                $sumAllProfit += $currentProfit;
                $lowestBuyValue = $price;
            }
        }

        return $sumAllProfit;
    }

}

$prices =  [7,1,5,3,6,4];

$solution = new Solution();

echo $solution->maxProfit($prices);