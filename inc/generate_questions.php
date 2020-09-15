<?php
//generating random questions to the quiz

$questions =[];


for ($i = 0; $i <= 9; $i++) {



$leftAdder= rand(0,100);
$rightAdder= rand(0,100);




// the code below calculates the correct answers for the final results to be shown
$correctAnswer = $leftAdder + $rightAdder;




//the below code will count the number of incorrect answers to show at the end of the quiz

do {
   $wrongAnswer1 = $correctAnswer + rand(-10, 10);
} while($wrongAnswer1 == $correctAnswer);


do {
   $wrongAnswer2 = $correctAnswer + rand(-10, 10);
} while($wrongAnswer2 == $correctAnswer || $wrongAnswer2 == $wrongAnswer1);

// helps to add answers and questions to the array
$questions[] = [
    'leftAdder' => $leftAdder,
    'rightAdder' => $rightAdder,
    'correctAnswer' => $correctAnswer,
    'wrongAnswer1' => $wrongAnswer1,
    'wrongAnswer2' => $wrongAnswer2
];
$answers = [
  $correctAnswer,
  $wrongAnswer1,
  $wrongAnswer2
];
shuffle($answers);
}

