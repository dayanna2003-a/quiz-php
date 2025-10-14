  <?php session_start();?>
  <?php require "views/partials/header.php";?> 
   <div class="shadow p-5 bg-white">
      <h1 class="font-semibold text-3xl font-serif  md:pl-40">QUESTION4</h1>
</div>
   <h1 class="text-xl font-semibold ml-10 mt-20 mb-3 md:ml-120"><?php echo "4: Which Superglobal variable is used to collect form data sent with POST method in PHP? " ?></h1>
    <form action="" method="post"> 
         <input type="radio" name="answer" value="$_GET" class="ml-30 md:ml-130"><label for="" class="ml-2">$_GET</label><br>
          <input type="radio" name="answer" value="$_POST" class="ml-30 md:ml-130"><label for="" class="ml-2">$_POST</label><br>
         <input type="radio" name="answer" value="$_FORM" class="ml-30 md:ml-130"><label for="" class="ml-2">$_FORM</label><br>
         <input type="radio" name="answer" value="$_REQUEST" class="ml-30 md:ml-130"><label for="" class="ml-2">$_REQUEST</label><br>
       </form>
              <button class="bg-gray-500 p-3 ml-20 w-40 rounded mt-10 hover:bg-blue-400 hover:text-white cursor-pointer text-xl md:ml-130" ><a href="question.3.php">previous</a></button>
              <button class="bg-gray-500 p-3 ml-10  md:mr-80 w-40 rounded mt-5 hover:bg-blue-400 hover:text-white cursor-pointer text-xl md:ml-130"><a href="question.5.php">next</a></button>
         
<?php require "views/partials/end.php";?>
<?php session_destroy(); ?> 

 