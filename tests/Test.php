<?php

class CurryingTest extends PHPUnit\Framework\TestCase {
  public function testDescriptionExample() {
    $this->assertEquals([2, 4, 6], multiply_all([1, 2, 3])(2));
  }
}