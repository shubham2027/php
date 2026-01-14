<?php   
//dice roll battle with php

$round = 5;
$player1 = 0;
$player2 = 0;

for($i=0; $i<$round; $i++){
    $player1score = rand(1 ,6);
    $player2score = rand(1, 6);
    $player1 += $player1score;
    $player2 += $player2score;
    echo "Round " . ($i+1) . "<br> Player 1: " . $player1score . "           Player 2: " . $player2score . "<hr>";
    

}
if($player1 > $player2){
    echo "Player 1 wins " . " <br>PLayer 1: total score: ". $player1 . "Player 2: total score: " . $player2;
}else if($player1 == $player2){
    echo "Draw " . " <br>PLayer 1: total score: ". $player1 . "Player 2: total score: " . $player2;
}else{
    echo "Player 2 wins " . " <br>PLayer 1: total score: ". $player1 . "Player 2: total score: " . $player2;

}



?>