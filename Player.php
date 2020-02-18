<?php
include_once("./Card.php");

class Player {
  private $handCards;
  private $name;

  public function __construct($name)
  {
    $this->name = $name;
    $this->handCards = [];
  }

  public function takeCard(Card $card)
  {
    $this->handCards[] = $card;
  }

  public function show() {
    foreach ($this->handCards as $card) {
      echo $card->display();
      echo "\t";
    }
  }

  public function getName() {
    return $this->name;
  }
}