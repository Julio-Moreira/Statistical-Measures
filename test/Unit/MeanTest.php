<?php
namespace statistical\test\unit\Mean;

use PHPUnit\Framework\TestCase;
use src\classes\Mean as Mean;

class MeanTest extends TestCase {
    public function testCalculateWithIntegerNumbers() {
        // Arrange
        $items = [1, 2, 3, 4, 5, 6];
        $mean = new Mean();

        // Act
        $meanResult = $mean->calculate($items);

        // Assert
        self::assertSame(3.5, $meanResult);
    }    

    public function testCalculateWithFloatingNumbers() {
        $items = [10, 10.5, 0.5];
        $mean = new Mean();

        $meanResult = $mean->calculate($items);

        self::assertSame(7.0, $meanResult);
    }
}