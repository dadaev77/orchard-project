<?php

require_once ('FruitTree.php');
require_once ('PearTree.php');
require_once ('AppleTree.php');
require_once ('FruitCollector.php');




echo "<h2>Собранный урожай</h2>";
echo "<ul>";
echo "<li>Собрано яблок: " . $harvest['apples']['count'] . ", общий вес: " . $harvest['apples']['weight'] . " гр</li>";
echo "<li>Собрано груш: " . $harvest['pears']['count'] . ", общий вес: " . $harvest['pears']['weight'] . " гр</li>";
echo "</ul>";

echo "<h2>Самое тяжелое яблоко</h2>";
echo "<p>Самое тяжелое яблоко весит: " . $harvest['heaviestApple']['weight'] . " гр, с дерева №" . $harvest['heaviestApple']['treeId'] . "</p>";


