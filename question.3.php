<?php session_start(); ?>
  
 <?php require "views/partials/header.php";?> 
   <div class="shadow p-5 bg-white">
      <h1 class="font-semibold text-3xl font-serif  md:pl-40">QUESTION3</h1>
   </div> 
       <h1 class="text-xl font-semibold ml-10 mt-20 mb-3"><?php echo "3: Which function is used to output text in PHP?" ?></h1>
    <form action="" method="post"> 
         <input type="radio" name="answer" value="print()" class="ml-30"><label for="" class="ml-2">print()</label><br>
          <input type="radio" name="answer" value="echo()" class="ml-30"><label for="" class="ml-2">echo()</label><br>
          <input type="radio" name="answer" value="write()" class="ml-30"><label for="" class="ml-2">write()</label><br>
          <input type="radio" name="answer" value="display()" class="ml-30"><label for="" class="ml-2">display()</label><br>
</form>
       <button class="bg-gray-500 p-3 ml-20 w-40 rounded mt-10 hover:bg-blue-400 hover:text-white cursor-pointer text-xl md:ml-130"><a href="question.2.php">previous</a></button>
       <button class="bg-gray-500 p-3 ml-10 w-40 rounded mt-10 hover:bg-blue-400 hover:text-white cursor-pointer text-xl md:ml-130"><a href="question.4.php">Next</a></button>

<?php require "views/partials/end.php";?>
<?php session_destroy(); ?>

