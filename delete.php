<?php 
    // connection
    include "mysql/db.php";
    Connection();

      // select all data
    $query = "SELECT * FROM users"; 
    $result = mysqli_query($connection,$query);

    // delete data
      if(isset($_POST["submit"])){
        DeleteFun();
    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete data</title>
</head>
<body>

<form action="delete.php" method="post">
        <input type="text" name="username" placeholder="Uživatelské jméno">
        <br>
        <input type="password" name="password" placeholder="Heslo">
        <br>

        <select name="id" id="">
            <?php
            while($row = mysqli_fetch_assoc($result)){
                $id = $row["id"];
                echo "<option value='$id'>$id</option>";
            }
             ?>
            
            

        </select>


        <input type="submit" name="submit" value="Odeslat">
    </form>
    
</body>
</html>