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
        $maxProfit = 0;

        foreach ($prices as $price) {
           
            if ($price < $lowestBuyValue) {
                $lowestBuyValue = $price;
            }

            $currentProfit = $price - $lowestBuyValue;
          
            if ($currentProfit > $maxProfit) {
                $maxProfit = $currentProfit;
            }
        }

        return $maxProfit;
    }

}

$prices = [7,6,4,3,1];

$solution = new Solution();

echo $solution->maxProfit($prices);