<?php

class Tree {

    public $name;
    public $typeOfFertilizerUsed; 
    public $heightOfTree;

    function __construct($name, $typeOfFertilizerUsed, $heightOfTree){
        $this->name = $name;
        $this->typeOfFertilizerUsed = $typeOfFertilizerUsed; 
        $this->heightOfTree = $heightOfTree;
    }

    function getName(){
        return $this->name;
    }

    function getTypeOfFertilizerUsed(){
        return $this->typeOfFertilizerUsed;
    }

    function getHeightOfTree(){
        return $this->heightOfTree;
    }
}

$Garden = [];

$treesData = [
    ["Apple Tree", "NPK", "22m"],
    ["Banana Tree", "HRT", "12m"],
    ["Mango Tree", "ARS", "29m"],
    ["Persimon Tree", "NPK", "220m"]
];

for ($i = 0; $i < count($treesData); $i++) {
    $treeData = $treesData[$i];
    $tree = new Tree($treeData[0], $treeData[1], $treeData[2]);
    $Garden[$i] = $tree;
}

foreach ($Garden as $tree){
    echo $tree->getName() . "\n";
    echo $tree->getTypeOfFertilizerUsed() . "\n"; 
    echo $tree->getHeightOfTree() . "\n"; 
}

print_r($Garden);
