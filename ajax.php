<?php
require_once 'RPS.php';

$selection = $_POST['selection'];

$rps = new RPS();
//set player
$rps->setPlayer($selection);
//start game
$rps->battle();
//print out results
echo $rps->results();
