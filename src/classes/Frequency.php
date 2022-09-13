<?php
namespace src\classes;

use src\interfaces\Statistical;
require_once "Statistical.php";

class Frequency implements Statistical {
    public function calculate(array $items): array {
        $result = [];
        $total = array_sum($items);
        array_push($result, array_count_values($items), array_count_values($items));
        array_map(fn($item) => ($item/$total) * 100, $result[1]);
        return $result;
    }
}