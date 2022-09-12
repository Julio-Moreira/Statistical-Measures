<?php
namespace src\classes;

use src\interfaces\Statistical;
require_once "Statistical.php";

class Mode implements Statistical {
    public function calculate(array $items): float {
        return max(-INF, array_count_values($items));
    }
}