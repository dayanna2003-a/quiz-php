<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Document</title>
</head>
<body class="bg-blue-100">
    <form action="question.1.php" method="post">
        <label for="" class="font-semibold text-2xl ml-20 md:ml-130 ">first name:</label>
        <input type="text" name="firstname:" class="rounded mt-40 p-2 shadow-md bg-white"><br>
        <label for="" class="font-semibold text-2xl ml-20 md:ml-130">third name:</label>
        <input type="text" name="third name" class="rounded mt-10 p-2 shadow-md bg-white"><br>
        <label for="" class="font-semibold text-2xl ml-20 md:ml-130">second name:</label>
        <input type="text" name="second name" class="rounded mt-10 p-2 shadow-md bg-white"><br>
        <input type="radio" name="gender" value="male" class="ml-20 mt-8 md:ml-130">
        <label for="" class="text-xl ml-2">Male</label><br>
        <input type="radio" name="gender" value="female" class="ml-20 mt-5 md:ml-130">
        <label for="" class="text-xl ml-2">Female</label><br>
        <input type="submit" value="submit" class="bg-gray-500 p-3 ml-40 w-40 rounded mt-10 hover:bg-blue-400 hover:text-white cursor-pointer text-xl md:ml-130"><br>


    </form>
</body>
</html>
<?php 
if(isset($_POST["submit"])){

     $firstname =$_POST["first name"];
      $secondname =$_POST["second name"];
       $thirdname =$_POST["third name"];

       if(empty($firstname)){
            echo "first name is missing";
       }
       elseif(empty($secondname)){
        echo "second name is missing";
       }
        elseif(empty($thirdname)){
        echo "third name is missing";
       }
       else {
         echo "submit";
       }

}

?>
