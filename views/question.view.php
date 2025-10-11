   <?php require "views/partials/header.php";?> 
   <div class="shadow p-5 bg-white">
      <h1 class="font-semibold text-3xl font-serif  md:pl-40">QUESTION</h1>
   </div>    
<?php require "views/partials/end.php";?>

<h2>Question 1:</h2><br>
<p><?php echo $question;?></p>
<form action ="" method="post">
      <input type="radio" name="answer" value="<?php echo $choices[0];?>"><br>
</form>