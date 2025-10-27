   <?php session_start();?>
   
   <?php require "views/partials/header.php";?> 
   <div class="shadow p-5 bg-white">
      <h1 class="font-semibold text-3xl font-serif  md:pl-40">QUESTION1</h1>
   </div> 
      <h1 class="text-xl font-semibold ml-20 mt-20 mb-3 md:ml-120"><?php echo "1: What does php stands for?" ?></h1>
    
         <form action="question.2.php" method="post"> 
         <input type="radio" name="answer" value="personal home page" class="ml-30 md:ml-130"><label for="" class="ml-2 p-1">personal home page</label><br>
          <input type="radio" name="answer" value="private Hypertext processor" class="ml-30 md:ml-130"><label for="" class="ml-2 p-1">private Hypertext processor</label><br>
         <input type="radio" name="answer" value="PHP:Hypertext preprocessor" class="ml-30 md:ml-130"><label for="" class="ml-2 p-1">PHP: Hypertext preprocessor</label><br>
         <input type="radio" name="answer" value="Public Hosting Program" class="ml-30 md:ml-130"><label for="" class="ml-2 p-1">Public Hosting Program</label><br> 
          <input type="submit" name="next" value="next"  class="bg-gray-500 p-3 ml-10 md:mr-80  w-40 rounded mt-5 hover:bg-blue-400 hover:text-white cursor-pointer text-xl md:ml-130"> 
     </form>
            
          
<?php require "views/partials/end.php";?>
<?php session_destroy(); ?>
