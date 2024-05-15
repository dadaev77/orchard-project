<?php

class FruitTree
{
    protected $treeId;
    protected $fruitType;
    protected $minFruits;
    protected $maxFruits;

    public function __construct($treeId, $fruitType, $minFruits, $maxFruits) {
        $this->treeId = $treeId;
        $this->fruitType = $fruitType;
        $this->minFruits = $minFruits;
        $this->maxFruits = $maxFruits;
    }

    public function getTreeId() {
        return $this->treeId;
    }

    public function getFruitType() {
        return $this->fruitType;
    }

    public function harvestFruits() {
        return mt_rand($this->minFruits, $this->maxFruits);
    }

}