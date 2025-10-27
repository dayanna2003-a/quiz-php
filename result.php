<?php 
session_start();

if ($_SERVER['REQUEST_METHOD'] =='POST'){
   $_SESSION['answer5'] = $_POST ['answer5'] ?? '';
}

$correctAnswers =[
  'answer1' => 'PHP:Hypertext preprocessor',
  'answer2' => '$',
  'answer3' => 'echo()',
  'answer4' => '$_POST',
  'answer5' => 'include()'
];
$score = 0;

foreach ($correctAnswers as $question => $correctAnswer){

  if (isset($_SESSION[$question]) && $_SESSION[$question] === $correctAnswer){
    $score++;
  }
}

$_SESSION['score'] = $score;

  
  require "views/result.view.php";
  ?>