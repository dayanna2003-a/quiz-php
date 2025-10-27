  <?php session_start(); 
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $_SESSION['answer4'] = $_POST ['answer4'] ?? '';
 }
 
  ?> 
  <?php require "views/partials/header.php";?> 
   <div class="shadow p-5 bg-white">
      <h1 class="font-semibold text-3xl font-serif  md:pl-40">QUESTION5</h1>
   </div>
   
  <h1 class="text-xl font-semibold ml-20 mt-20 mb-3 md:ml-120"><?php echo "5: What does is used to link?" ?></h1>
<form action="result.php" method="post"> 
         <input type="radio" name="answer5" value="insert()" class="ml-30 md:ml-130"><label for="" class="ml-2">insert()</label><br>
          <input type="radio" name="answer5" value="include()" class="ml-30 md:ml-130"><label for="" class="ml-2">include()</label><br>
         <input type="radio" name="answer5" value="attach()" class="ml-30 md:ml-130"><label for="" class="ml-2">attach()</label><br>
         <input type="radio" name="answer5" value="link()" class="ml-30 md:ml-130"><label for="" class="ml-2">link()</label><br>
         <input type="submit" name="next" value="next"  class="bg-gray-500 p-3 ml-10 md:mr-80  w-40 rounded mt-5 hover:bg-blue-400 hover:text-white cursor-pointer text-xl md:ml-130">
</form>
       
 
<?php require "views/partials/end.php";?>
