<?php
include_once('./Card.php');
class Deck {
  private $cards;
  public const suits = ['S', 'H', 'D', 'C'];
  public const points = ["2", "3", "4", "5", "6", "7", "8", "9", "10", "J", "Q", "K", "A"];

  public function __construct()
  {
    $this->cards = [];
    $suits = ['S', 'H', 'D', 'C'];
    $points = ["2", "3", "4", "5", "6", "7", "8", "9", "10", "J", "Q", "K", "A"];
    foreach ($suits as $suit) {
      foreach ($points as $point) {
        $card = new Card($suit, $point);
        $this->cards[] = $card;
      }
    }
  }

  /**
   * 洗牌功能
   *
   * @return this
   */
  public function shuffle()
  {
    shuffle($this->cards);
    return $this;
  }

  /**
   * 秀出卡片
   *
   * @return void
   */
  public function show()
  {
    print_r($this->cards);
  }

  public function getCards()
  {
    return $this->cards;
  }

  public function pop() {
    return array_shift($this->cards);
  }

  public function count() {
    return count($this->cards);
  }
}