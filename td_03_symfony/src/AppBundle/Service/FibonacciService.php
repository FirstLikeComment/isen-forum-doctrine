<?php
namespace AppBundle\Service;

class FibonacciService
{

    public function compute(int $n): int
    {
        $i = 0;
        $j = 1;
        
        for ($k = 0; $k < $n; $k ++) {
            $temp = $i + $j;
            $i = $j;
            $j = $temp;
        }
        
        return $i;
    }
}
