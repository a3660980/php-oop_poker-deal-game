<?php
include_once("./Player.php");
include_once("./Deck.php");

class Game {
  private $players;
  private $deck;

  public function __construct()
  {
    $this->deck = new Deck;
    $this->deck->shuffle();
  }

  public function addPlayer($name) {
    $this->players[] = new Player($name);
  }

  public function deal() {
    while($this->deck->count()) {
      foreach ($this->players as $player) {
        $player->takeCard($this->deck->pop());
      }
    }
  }

  public function show() {
    foreach ($this->players as $player) {
      echo $player->getName()."\t";
      echo $player->show();
      echo "\n";
    }
  }
}