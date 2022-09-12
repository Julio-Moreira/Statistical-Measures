<?php 
namespace src\classes;

use src\interfaces\Statistical;
require_once "Statistical.php";

class Median implements Statistical {
    public function calculate(array $items): float {
        $middle = floor((count($items) - 1) / 2);

        return (count($items)-1) % 2 == 0 
            ? $this->meanOf($items[$middle], $items[$middle+1]) 
            : $items[$middle];
    }

    private function meanOf($value_1, $value_2) {
        return ($value_1 + $value_2) / 2;
    }
}