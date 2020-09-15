<?php
// The Math Quiz App: starting the session
session_start();
//including all the questions  to the quiz
include ("inc/generate_questions.php");

//
$question_num = filter_input(INPUT_GET, 'p', FILTER_SANITIZE_NUMBER_INT);
if (empty ($question_num)){
    $question_num = 1;
}
//the code below holds the number of questions data to be asked
if ($question_num <= 10) {
    // the below code shows the random qustions, the code also shows the sequence of question student whilst attemting

    echo "<p class='breadcrumbs'> Question ". $question_num . " of 10 </p>";
    echo '<form method = "post" action="index.php?p='. ($question_num + 1) . '" />';
    echo "<p class='quiz'> What is " . $leftAdder . "+" . $rightAdder . "? </p>";


    echo "<input type='submit' class='btn' name='answer' value=' " . $answers[0] . "'>";
    echo "<input type='submit' class='btn' name='answer' value=' " . $answers[1] . "'>";
    echo "<input type='submit' class='btn' name='answer' value=' " . $answers[2] . "'>";
    echo "<input type='hidden' name='correctAnswer' value='" . $correctAnswer . "'>";
    echo '</form>';
  }
// Keeping the info of the answers to show it at the  end of result

// the below code helps to toast  the answers incorrectly or correctly

if (!isset($_SESSION['numberCorrect'])) {
    $_SESSION['numberCorrect'] = 0;
}
if (isset($_POST['answer']) && isset($_POST['correctAnswer'])) {
    $_SESSION['answer'] = filter_input(INPUT_POST, 'answer', FILTER_SANITIZE_NUMBER_INT);
    $_SESSION['correctAnswer'] = filter_input(INPUT_POST, 'correctAnswer', FILTER_SANITIZE_NUMBER_INT);
if (($_SESSION['answer'] == $_SESSION['correctAnswer'])) {
    $_SESSION['numberCorrect']++;
    
  echo '<h1><span style="color:#2E8B57;text-align:center;">Welldone, That is the Correct Answer!<span></h1>';

}elseif ($_SESSION['answer'] !== $_SESSION['correctAnswer']){
         
  echo '<h1><span style="color:#FF0000;text-align:center;" > Bummer! The correct answer was  </span>' .  $_SESSION['correctAnswer'] . '.</h1>';
}
}
// the code below will show the final score and will give an option to retry the quiz again

if ($question_num == 11) {
    echo '<h1> You acheived '. $_SESSION['numberCorrect'] . ' out of 10 correct!</h1>';
    echo "<form action='index.php' method='GET'>";
    echo "<input type='submit' class='btn' name='restart' value='Want to try Again?'>";
    session_destroy();
    echo '</form>';
}