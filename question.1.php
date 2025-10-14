   <?php session_start();?>
   
   <?php require "views/partials/header.php";?> 
   <div class="shadow p-5 bg-white">
      <h1 class="font-semibold text-3xl font-serif  md:pl-40">QUESTION1</h1>
   </div> 
      <h1 class="text-xl font-semibold ml-20 mt-20 mb-3"><?php echo "1: What does php stands for?" ?></h1>
    
         <form action="" method="post"> 
         <input type="radio" name="answer" value="personal home page" class="ml-30"><label for="" class="ml-2 p-1">personal home page</label><br>
          <input type="radio" name="answer" value="private Hypertext processor" class="ml-30"><label for="" class="ml-2 p-1">private Hypertext processor</label><br>
         <input type="radio" name="answer" value="PHP:Hypertext preprocessor" class="ml-30"><label for="" class="ml-2 p-1">PHP: Hypertext preprocessor</label><br>
         <input type="radio" name="answer" value="Public Hosting Program" class="ml-30"><label for="" class="ml-2 p-1">Public Hosting Program</label><br>  
     </form>
            <button class="bg-gray-500 p-3 ml-20 w-40 rounded mt-5 hover:bg-blue-400 hover:text-white cursor-pointer text-xl md:ml-130"><a href="log.php">previous</a></button> 
             <button class="bg-gray-500 p-3 ml-10 w-40 rounded mt-5 hover:bg-blue-400 hover:text-white cursor-pointer text-xl md:ml-130"><a href="question.2.php">Next</a></button> 
          
<?php require "views/partials/end.php";?>
<?php session_destroy(); ?>
