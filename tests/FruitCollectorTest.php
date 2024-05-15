<?php

require_once __DIR__ . '/../FruitTree.php';
require_once __DIR__ . '/../AppleTree.php';
require_once __DIR__ . '/../PearTree.php';
require_once __DIR__ . '/../FruitCollector.php';

use PHPUnit\Framework\TestCase;

class FruitCollectorTest extends TestCase {
    public function testAddTree() {
        $collector = new FruitCollector();
        $tree = new AppleTree(1, 150, 180);
        $collector->addTree($tree);
        $this->assertContains($tree, $collector->trees);
    }

    public function testHarvestAll() {
        $collector = new FruitCollector();
        $collector->addTree(new AppleTree(1, 150, 180));
        $collector->addTree(new PearTree(2, 130, 170));
        $harvest = $collector->harvestAll();
        $this->assertIsArray($harvest);
        $this->assertArrayHasKey('apples', $harvest);
        $this->assertArrayHasKey('pears', $harvest);
    }


}
