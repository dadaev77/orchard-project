<?php

class PearTree extends FruitTree
{
    protected $minPearsWeight;
    protected $maxPearsWeight;

    public function __construct($treeId, $minPearsWeight, $maxPearsWeight) {
        parent::__construct($treeId, 'pear', 0, 20);
        $this->minPearsWeight = $minPearsWeight;
        $this->maxPearsWeight = $maxPearsWeight;
    }

    public function harvestPears() {
        $pearCount = $this->harvestFruits();
        $pearWeight = mt_rand($this->minPearsWeight, $this->maxPearsWeight);
        return [$pearCount, $pearWeight];
    }

}