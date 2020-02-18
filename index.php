<?php
include_once('./Game.php');

$game = new Game;
$game->addPlayer('Johnny');
$game->addPlayer('Lucy');
$game->addPlayer('Anna');
$game->addPlayer('RexChen');

$game->deal();

$game->show();