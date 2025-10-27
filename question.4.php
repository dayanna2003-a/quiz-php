  <?php session_start();
   if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $_SESSION['answer3'] = $_POST ['answer3'] ?? '';
 }
 
  ?>
  <?php require "views/partials/header.php";?> 
   <div class="shadow p-5 bg-white">
      <h1 class="font-semibold text-3xl font-serif  md:pl-40">QUESTION4</h1>
</div>
   <h1 class="text-xl font-semibold ml-10 mt-20 mb-3 md:ml-120"><?php echo "4: Which Superglobal variable is used to collect form data sent with POST method in PHP? " ?></h1>
    <form action="question.5.php" method="post"> 
         <input type="radio" name="answer4" value="$_GET" class="ml-30 md:ml-130"><label for="" class="ml-2">$_GET</label><br>
          <input type="radio" name="answer4" value="$_POST" class="ml-30 md:ml-130"><label for="" class="ml-2">$_POST</label><br>
         <input type="radio" name="answer4" value="$_FORM" class="ml-30 md:ml-130"><label for="" class="ml-2">$_FORM</label><br>
         <input type="radio" name="answer4" value="$_REQUEST" class="ml-30 md:ml-130"><label for="" class="ml-2">$_REQUEST</label><br>
         <input type="submit" name="next" value="next"  class="bg-gray-500 p-3 ml-10 md:mr-80  w-40 rounded mt-5 hover:bg-blue-400 hover:text-white cursor-pointer text-xl md:ml-130">
       </form>

         
<?php require "views/partials/end.php";?>
<?php session_destroy(); ?> 

 