<?php

use PHPUnit\Framework\TestCase;


require_once __DIR__ . '/../FruitTree.php';
require_once __DIR__ . '/../AppleTree.php';
require_once __DIR__ . '/../PearTree.php';

class PearTreeTest extends TestCase {
    public function testHarvestPears() {
        $tree = new PearTree(1, 130, 170);
        $result = $tree->harvestPears();
        $this->assertIsArray($result);
        $this->assertGreaterThanOrEqual(130, $result[1]);
        $this->assertLessThanOrEqual(170, $result[1]);
    }
}