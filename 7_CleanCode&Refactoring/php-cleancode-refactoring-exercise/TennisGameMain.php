<?php
include ('TennisGame.php');
$tennisGame = new TennisGame();
$tennisGame->getScore('player1', 'player2', 4, 1);
echo $tennisGame;