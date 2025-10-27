
<?php require "views/partials/header.php";?> 
    <div class="shadow p-5 bg-white">
        <h1 class="font-semibold text-3xl font-serif  md:pl-40">RESULT</h1>
    </div>  
    <h2 class="mt-10 ml-20 font-semibold text-2xl">your answer</h2>
    <?php 
    for ($i=1; $i<=5; $i++){
        $question ="question" . $i;
        echo "<b> $i:</b>" . ($_SESSION['answer' . $i] ?? 'No answer') . "</p>";
    }
     echo "your score is: " . ($_SESSION['score'] ?? '0') . "/5";
      ?><br>
    <a href="question.1.php" class="font-semibold text-xl bg-gray-500 hover:bg-blue-400 hover:text-white rounded p-3 ml-20 mt-150"> Try Again</a>
<?php require "views/partials/end.php";?>