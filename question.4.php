  <?php session_start();?>
  <?php require "views/partials/header.php";?> 
   <div class="shadow p-5 bg-white">
      <h1 class="font-semibold text-3xl font-serif  md:pl-40">QUESTION4</h1>
</div>
  <?php echo "<h1>1: What does php stands for?</h1>" ?>
    <form action="question.5.php" method="post"> 
         <input type="radio" name="answer" value="personal home page" class="ml-10"><label for="" class="ml-2">personal home page</label><br>
          <input type="radio" name="answer" value="personal home page" class="ml-10"><label for="" class="ml-2">personal home page</label><br>
         <input type="radio" name="answer" value="personal home page" class="ml-10"><label for="" class="ml-2">personal home page</label><br>
         <input type="radio" name="answer" value="personal home page" class="ml-10"><label for="" class="ml-2">personal home page</label><br>
       </form>
              <button class="bg-gray-500 p-3 ml-10 w-40 rounded mt-10 hover:bg-blue-400 hover:text-white cursor-pointer text-xl md:ml-130" ><a href="question.3.php"></a>previous</button>
              <button class="bg-gray-500 p-3 ml-10 w-40 rounded mt-10 hover:bg-blue-400 hover:text-white cursor-pointer text-xl md:ml-130"><a href="question.3.php"></a>next</button>
       <?php session_destroy(); ?>    
<?php require "views/partials/end.php";?>

 