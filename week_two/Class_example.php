<?php

class Tree {

    public $name;
    public $type_of_fertilizer_used;
    public $height_of_tree;

    function __construct($name, $type_of_fertilizer_used, $height_of_tree) 
    {
        $this->name = $name;
        $this->type_of_fertilizer_used = $type_of_fertilizer_used;
        $this->height_of_tree = $height_of_tree;
    }

    function get_name()
    {
        return $this->name;
    }

    function get_type_of_fertilizer_used() 
    {
        return $this->type_of_fertilizer_used;
    }

    function get_height_of_tree()
    {
        return $this->height_of_tree;
    }
}

$Garden = [];


$treesData = [
    ["Apple Tree", "NPK", "22m"],
    ["Banana Tree", "HRT", "12m"],
    ["Mango Tree", "ARS", "29m"],
    ["Persimon Tree", "NPK", "220m"]
];



for ($i = 0; $i < count($treesData); $i++) 
{
    $treeData = $treesData[$i];
    $tree = new Tree($treeData[0], $treeData[1], $treeData[2]);
    $Garden[$i] = $tree;
}


foreach ($Garden as $tree) 
{
    echo $tree->get_name() . "\n";
    echo $tree->get_type_of_fertilizer_used() . "\n";
    echo $tree->get_height_of_tree() . "\n";
}

print_r($Garden);
