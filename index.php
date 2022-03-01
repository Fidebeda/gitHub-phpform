<?php 

    // if(isset($_POST["submit"])){

    //     $username = $_POST["username"];
    //     $password = $_POST["password"];

    //     if($username && $password){
    //         echo $username;
    //         echo "<br>";
    //         echo $password;

    //     } else{
    //         echo "něco chybí";
    //     }

        // connection

        include "mysql/db.php";
        

        $query = "SELECT * FROM users"; 

        $result = mysqli_query($connection,$query);

        if(!$result){
            die("selhání".mysqli_error($connection));
        }
        
    


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP test formular</title>
</head>
<body>

        <!-- <pre>
            Předformátovaný text.
        </pre> -->

    <form action="index.php" method="post">
        <input type="text" name="username" placeholder="Uživatelské jméno">
        <br>
        <input type="password" name="password" placeholder="Heslo">
        <br>
        <input type="submit" name="submit" value="Odeslat">
    </form>

    <?php

        while($row = mysqli_fetch_assoc($result)){

            echo "<pre>";
            print_r($row);
            echo "</pre>";
        }
    
    ?>
    
</body>
</html>