<?php

class Solution {

    /**
     * @param String[] $details
     * @return Integer
     */
    function countSeniors($details) {
        $contAgeOver60 = 0;

        foreach($details as $passenger) {
            $passengerAge = (int)substr($passenger, 11, 2);
    
            if ($passengerAge > 60) {
                $contAgeOver60++;
            }
        }

        return $contAgeOver60;
    }
}

$details = ["7868190130M7522","5303914400F9211","9273338290F4010"];

$solution = new Solution();

echo $solution->countSeniors($details);