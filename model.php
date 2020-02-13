<?php
class Character { // Présence du mot-clé class suivi du nom de la classe.
  public $health = 0;
  public $mana = 0;
  public $stuff;

  public function __construct(){
    $this->stuff = new Stuff();//Instance de la classe Stuff.
  }
  public function __destruct(){

  }
  public function chat($charac){
    return 'Good Morning Vietnam';
  }
}
class Orc extends Character{
  public $health = 1000;

  public function useHammer(){
    return false;
  }
  public function useSword(){
    return true;
  }
}
class Stuff {
  public $head = 'Utilisation d\'un casque';
  public $body = 'Compléter votre armure';
  public $weapon = 'Choisissez votre arme';

  public function __construct(){

  }
  public function view(){
    return 'Une bouteille de pinard vous attaque';
  }
  public function __destruct(){

  }
}
?>
