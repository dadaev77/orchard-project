<?php

use PHPUnit\Framework\TestCase;


require_once __DIR__ . '/../FruitTree.php';
require_once __DIR__ . '/../AppleTree.php';


class AppleTreeTest extends TestCase {
    public function testHarvestApples() {
        $tree = new AppleTree(1, 150, 180);
        $result = $tree->harvestApples();
        $this->assertIsArray($result);
        $this->assertGreaterThanOrEqual(150, $result[1]);
        $this->assertLessThanOrEqual(180, $result[1]);
    }
}