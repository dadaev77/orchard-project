<?php

class AppleTree extends FruitTree
{
    public $minApplesWeight;
    public $maxApplesWeight;

    public function __construct($treeId, $minApplesWeight, $maxApplesWeight) {
        parent::__construct($treeId, 'apple', 40, 50);
        $this->minApplesWeight = $minApplesWeight;
        $this->maxApplesWeight = $maxApplesWeight;
    }

    public function harvestApples() {
        $appleCount = $this->harvestFruits();
        $appleWeight = mt_rand($this->minApplesWeight, $this->maxApplesWeight);
        return [$appleCount, $appleWeight];
    }

}