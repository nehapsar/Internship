<?php

class Reptiles {
    
    const scientificFamily = "reptilia";
    const domain = "Eukaryota";
    const kingdom = "Animalia";
    const phylum="chordata";
    public $nameOfSpecies;
    public $weightOfSpecies;

    public function __construct($nameOfSpecies,$weightOfSpecies){
       $this->nameOfSpecies=$nameOfSpecies;
       $this->weightOfSpecies = $weightOfSpecies;
       $this->scientificFamily = self::scientificFamily;
       $this->domain = self::domain;
       $this->kingdom = self::kingdom;
       $this->phylum= self::phylum;
   }
}

$lizard = new Reptiles("Lizard","20g");
$snake = new Reptiles("Cobra","3kg");

echo "Name of Species   : ".$lizard->nameOfSpecies."\n";
echo "Weight of Species : ".$lizard->weightOfSpecies."\n";
echo "Scentific Family  : ".$lizard->scientificFamily."\n";
echo "Domain of Species : ".$lizard->domain."\n";
echo "Kingdom of Species: ".$lizard->kingdom."\n";
echo "Phylum of Species : ".$lizard->phylum."\n";

echo "Name of Species   : ".$snake->nameOfSpecies."\n";
echo "Weight of Species : ".$snake->weightOfSpecies."\n";
echo "Scentific Family  : ".$snake->scientificFamily."\n";
echo "Domain of Species : ".$snake->domain."\n";
echo "Kingdom of Species: ".$snake->kingdom."\n";
echo "Phylum of Species : ".$snake->phylum."\n";

?>






















?>
