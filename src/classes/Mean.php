<?php
namespace src\classes;

class Mean {
    public function calculate(array $items): float {
        return array_sum($items)/count($items);
    }
}