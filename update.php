<?php 
    // connection
    include "mysql/db.php";

    // select all data
    $query = "SELECT * FROM users"; 

    $result = mysqli_query($connection,$query);

    if(!$result){
        die("selhání".mysqli_error($connection));
    }

    if(isset($_POST["submit"])){
        $username = $_POST["username"];
        $password = $_POST["password"];
        $id = $_POST["id"];

        $query2 = "UPDATE users SET username='$username', password='$password' WHERE id=$id ";

        $result2 = mysqli_query($connection,$query2);

        if(!$result2){
            die("dotaz selhal".mysqli_error($connection));
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>

<form action="update.php" method="post">
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