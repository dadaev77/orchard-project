<?php

class FruitCollector {
    public $trees = [];

    public function addTree(FruitTree $tree) {
        $this->trees[] = $tree;
    }

    public function harvestAll() {
        $appleCount = 0;
        $pearCount = 0;
        $totalAppleWeight = 0;
        $totalPearWeight = 0;
        $heaviestApple = ['weight' => 0, 'treeId' => null];

        foreach ($this->trees as $tree) {
            if ($tree instanceof AppleTree) {
                list($apples, $weight) = $tree->harvestApples();
                $appleCount += $apples;
                $totalAppleWeight += ($apples * $weight);
                if ($weight > $heaviestApple['weight']) {
                    $heaviestApple['weight'] = $weight;
                    $heaviestApple['treeId'] = $tree->getTreeId();
                }
            } elseif ($tree instanceof PearTree) {
                list($pears, $weight) = $tree->harvestPears();
                $pearCount += $pears;
                $totalPearWeight += ($pears * $weight);
            }
        }

        return [
            'apples' => ['count' => $appleCount, 'weight' => $totalAppleWeight],
            'pears' => ['count' => $pearCount, 'weight' => $totalPearWeight],
            'heaviestApple' => $heaviestApple
        ];
    }
}



$collector = new FruitCollector();


for ($i = 1; $i <= 10; $i++) {
    $collector->addTree(new AppleTree($i, 150, 180));
}

for ($i = 11; $i <= 25; $i++) {
    $collector->addTree(new PearTree($i, 130, 170));
}


$harvest = $collector->harvestAll();


