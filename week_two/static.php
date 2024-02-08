<?php

class  Mamals {
 const DOMAIN = "Eukaryota";
 const SCIENTIFIC_NAME = "Mammalia";
 private static $kingdom = "Animalia";
 public  static $phylum = "Chordata";  
 public static function findKingdom(){
    return self::$kingdom;
 }
}

class Humans extends Mamals {
  public static function findKingdom(){
    echo self::$phylum;
  }
}

$person = new Mamals();
echo "Humans biological classififcation as follows\n";
echo "Scientific name : ".$person::SCIENTIFIC_NAME."\n";
echo "Domain : ".Mamals::DOMAIN."\n";
echo "kingdom : ".$person->findKingdom()."\n";
echo "Phylum : ".Mamals::$phylum;
?>
