<?php
namespace src\classes;

use src\interfaces\Statistical;
require_once "Statistical.php";

class Mean implements Statistical {
    public function calculate(array $items): float {
        return array_sum($items)/count($items);
    }
}