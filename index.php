<?php   //generate a random number between 1 and 10. Run the game n times and tell the user some information about their guessing abilities.
//initial global variables: 
$play_count = 0; 
$correct_guesses = 0;
$guess_high = 0;
$guess_low = 0;

echo "Try to guess a number from 1 to 10 inclusive.\n"; 

function guessNumber(){
  global $play_count, $correct_guesses, $guess_high, $guess_low;  
  $play_count++; // etermine round
  $rand_num = rand(1,10);  // PCU choice
  
  echo "\nMake a guess...\n"; 
  $player_guess = readline(">> ");
  $player_guess = intval($player_guess); //converting to number type
  echo "\nROUND: $play_count\n\nYour guess: $player_guess\nAI pick: $rand_num\n"; 

  //logic counting game score: 
  if($player_guess === $rand_num){
    $correct_guesses++; 
  }elseif($player_guess > $rand_num){
    $guess_high++;
  }elseif($player_guess < $rand_num){
    $guess_low++;
  } 

}

guessNumber(); 