<?php
namespace statistical\test\unit\Mode;

use src\classes\Mode;
use PHPUnit\Framework\TestCase;

class ModeTest extends TestCase {
    public function testIfCalculateIsWorking() {
        $items = [1, 1, 2, 3, 4, 4, 4, 5, 5, 5, 5, 5, 5, 6, 8];
        $mode = new Mode();
        $result = $mode->calculate($items);

        self::assertSame(5, $result);
    }
}