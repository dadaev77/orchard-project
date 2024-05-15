<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../FruitTree.php';
require_once __DIR__ . '/../AppleTree.php';


class FruitTreeTest extends TestCase {
    public function testGetTreeId() {
        $tree = new FruitTree(1, 'apple', 40, 50);
        $this->assertEquals(1, $tree->getTreeId());
    }

    public function testGetFruitType() {
        $tree = new FruitTree(1, 'apple', 40, 50);
        $this->assertEquals('apple', $tree->getFruitType());
    }

    public function testHarvestFruits() {
        $tree = new FruitTree(1, 'apple', 40, 50);
        $this->assertGreaterThanOrEqual(40, $tree->harvestFruits());
        $this->assertLessThanOrEqual(50, $tree->harvestFruits());
    }
}