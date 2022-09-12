<?php
namespace statistical\test\unit\Median;

use PHPUnit\Framework\TestCase;
use src\classes\Median as Median;

class MedianTest extends TestCase {
    public function testCalculateWithOddNumbers() {
        // Arrange
        $items = [1, 2, 3, 4, 5, 6, 7];
        $median = new Median();

        // Act
        $medianResult = $median->calculate($items);

        // Assert
        self::assertSame(4, $medianResult);
    }    

    public function testCalculateWithPairNumbers() {
        $items = [1, 2, 3.4, 4, 5, 6];
        $median = new Median();

        $medianResult = $median->calculate($items);

        self::assertSame(3.7, $medianResult);
    }
}