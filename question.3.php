<?php session_start(); 
  if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $_SESSION['answer2'] = $_POST ['answer2'] ?? '';
 }?>
  
 <?php require "views/partials/header.php";?> 
   <div class="shadow p-5 bg-white">
      <h1 class="font-semibold text-3xl font-serif  md:pl-40">QUESTION3</h1>
   </div> 
       <h1 class="text-xl font-semibold ml-10 mt-20 mb-3 md:ml-120"><?php echo "3: Which function is used to output text in PHP?" ?></h1>
    <form action="question.4.php" method="post"> 
         <input type="radio" name="answer3" value="print()" class="ml-30 md:ml-130"><label for="" class="ml-2">print()</label><br>
          <input type="radio" name="answer3" value="echo()" class="ml-30 md:ml-130"><label for="" class="ml-2">echo()</label><br>
          <input type="radio" name="answer3" value="write()" class="ml-30 md:ml-130"><label for="" class="ml-2">write()</label><br>
          <input type="radio" name="answer3" value="display()" class="ml-30 md:ml-130"><label for="" class="ml-2">display()</label><br>
          <input type="submit" name="next" value="next"  class="bg-gray-500 p-3 ml-10 md:mr-80  w-40 rounded mt-5 hover:bg-blue-400 hover:text-white cursor-pointer text-xl md:ml-130">
</form>

<?php require "views/partials/end.php";?>
<?php session_destroy(); ?>

