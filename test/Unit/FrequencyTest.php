<?php
use PHPUnit\Framework\TestCase;
use src\classes\Frequency;

class FrequencyTest extends TestCase {
    private $result;

    public function setUp(): void {
        $items = [1, 2, 2, 3, 4, 5, 6, 6, 6, 6, 6, 6, 5.6];
        $frequency = new Frequency();
        $this->result = $frequency->calculate($items);
    }

    public function testFrequency() {
        self::assertSame([
            1 => 1,
            2 => 2,
            3 => 1,
            4 => 1,
            5 => 1,
            6 => 6,
            5.6 => 1
        ], $this->result[0]);
    }   

    public function testAbsoluteFrequency() {
        self::assertSame([], $this->result[1]);
    }

    public function testArrayResult() {
        self::assertCount(2, $this->result);
        self::assertCount(13, $this->result[0]);
        self::assertCount(13, $this->result[1]);
    }
}