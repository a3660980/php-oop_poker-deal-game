<?php
class Card {
  private $suit;
  private $point;

  public function __construct($suit, $point)
  {
    $this->suit = $suit;
    $this->point = $point;
  }

  public function display()
  {
    return "{$this->suit}{$this->point}";
  }
}